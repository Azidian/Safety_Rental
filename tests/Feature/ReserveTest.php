<?php

namespace Tests\Feature;

use App\Models\Reserve;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReserveTest extends TestCase
{
    use RefreshDatabase;

    public function test_reserve_can_be_created_and_listed(): void
    {
        $response = $this->post(route('reserves.store'), [
            'code' => 101,
            'state' => 'available',
            'startDate' => '2026-08-17',
            'endDate' => '2026-08-20',
            'createAt' => '2026-08-17',
        ]);

        $reserve = Reserve::firstOrFail();

        $response
            ->assertRedirect(route('reserves.index'))
            ->assertSessionHas('success', 'Elemento creado satisfactoriamente');

        $this->get(route('reserves.index'))
            ->assertOk()
            ->assertSee((string) $reserve->id)
            ->assertSee('101');

        $this->get(route('reserves.show', $reserve))
            ->assertOk()
            ->assertSee('available');
    }

    public function test_end_date_cannot_be_before_start_date(): void
    {
        $this->from(route('reserves.create'))
            ->post(route('reserves.store'), [
                'code' => 102,
                'state' => 'available',
                'startDate' => '2026-08-20',
                'endDate' => '2026-08-17',
                'createAt' => '2026-08-17',
            ])
            ->assertRedirect(route('reserves.create'))
            ->assertSessionHasErrors('endDate');

        $this->assertDatabaseCount('reserves', 0);
    }

    public function test_reserve_can_be_deleted(): void
    {
        $reserve = Reserve::create([
            'code' => 103,
            'state' => 'available',
            'startDate' => '2026-08-17',
            'endDate' => '2026-08-20',
            'createAt' => '2026-08-17',
        ]);

        $this->delete(route('reserves.destroy', $reserve))
            ->assertRedirect(route('reserves.index'));

        $this->assertDatabaseMissing('reserves', ['id' => $reserve->id]);
    }
}
