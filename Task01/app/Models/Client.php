<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /** * CLIENT ATTRIBUTES
     * $this->attributes['id'] - int - contains the client primary key (id)
     * $this->attributes['role'] - string - contains the client role
     * $this->attributes['name'] - string - contains the client name
     * $this->attributes['lastName'] - string - contains the client last name
     * $this->attributes['birthDate'] - string - contains the client birth date
     * $this->attributes['address'] - string - contains the client address
     * $this->attributes['email'] - string - contains the client email
     * $this->attributes['phone'] - string - contains the client phone
     * $this->attributes['identificationNumber'] - string - contains the client ID number
     * $this->attributes['licenseNumber'] - string - contains the client license number
     * $this->attributes['emergencyContact'] - string - contains the client emergency contact phone
     * $this->attributes['nameEmergencyContact'] - string - contains the emergency contact name
     * $this->attributes['lastNameEmergencyContact'] - string - contains the emergency contact last name
     * $this->attributes['EPS'] - string - contains the client EPS
     */
    protected $fillable = [
        'role',
        'name',
        'lastName',
        'birthDate',
        'address',
        'email',
        'phone',
        'identificationNumber',
        'licenseNumber',
        'emergencyContact',
        'nameEmergencyContact',
        'lastNameEmergencyContact',
        'EPS',
    ];

    // --- ID ---
    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    // --- ROLE ---
    public function getRole(): string
    {
        return $this->attributes['role'];
    }

    public function setRole(string $role): void
    {
        $this->attributes['role'] = $role;
    }

    // --- NAME ---
    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    // --- LAST NAME ---
    public function getLastName(): string
    {
        return $this->attributes['lastName'];
    }

    public function setLastName(string $lastName): void
    {
        $this->attributes['lastName'] = $lastName;
    }

    // --- BIRTH DATE ---
    public function getBirthDate(): string
    {
        return $this->attributes['birthDate'];
    }

    public function setBirthDate(string $birthDate): void
    {
        $this->attributes['birthDate'] = $birthDate;
    }

    // --- ADDRESS ---
    public function getAddress(): string
    {
        return $this->attributes['address'];
    }

    public function setAddress(string $address): void
    {
        $this->attributes['address'] = $address;
    }

    // --- EMAIL ---
    public function getEmail(): string
    {
        return $this->attributes['email'];
    }

    public function setEmail(string $email): void
    {
        $this->attributes['email'] = $email;
    }

    // --- PHONE ---
    public function getPhone(): string
    {
        return $this->attributes['phone'];
    }

    public function setPhone(string $phone): void
    {
        $this->attributes['phone'] = $phone;
    }

    // --- IDENTIFICATION NUMBER ---
    public function getIdentificationNumber(): string
    {
        return $this->attributes['identificationNumber'];
    }

    public function setIdentificationNumber(string $identificationNumber): void
    {
        $this->attributes['identificationNumber'] = $identificationNumber;
    }

    // --- LICENSE NUMBER ---
    public function getLicenseNumber(): string
    {
        return $this->attributes['licenseNumber'];
    }

    public function setLicenseNumber(string $licenseNumber): void
    {
        $this->attributes['licenseNumber'] = $licenseNumber;
    }

    // --- EMERGENCY CONTACT (PHONE) ---
    public function getEmergencyContact(): string
    {
        return $this->attributes['emergencyContact'];
    }

    public function setEmergencyContact(string $emergencyContact): void
    {
        $this->attributes['emergencyContact'] = $emergencyContact;
    }

    // --- NAME EMERGENCY CONTACT ---
    public function getNameEmergencyContact(): string
    {
        return $this->attributes['nameEmergencyContact'];
    }

    public function setNameEmergencyContact(string $nameEmergencyContact): void
    {
        $this->attributes['nameEmergencyContact'] = $nameEmergencyContact;
    }

    // --- LAST NAME EMERGENCY CONTACT ---
    public function getLastNameEmergencyContact(): string
    {
        return $this->attributes['lastNameEmergencyContact'];
    }

    public function setLastNameEmergencyContact(string $lastNameEmergencyContact): void
    {
        $this->attributes['lastNameEmergencyContact'] = $lastNameEmergencyContact;
    }

    // --- EPS ---
    public function getEPS(): string
    {
        return $this->attributes['EPS'];
    }

    public function setEPS(string $EPS): void
    {
        $this->attributes['EPS'] = $EPS;
    }

    // --- New Methods

    public function getAge(): int
    {
        return Carbon::parse($this->attributes['birthDate'])->age;
    }

    public function getLicenseExpirationDate(): string
    {
        if (isset($this->attributes['created_at'])) {
            return Carbon::parse($this->attributes['created_at'])->addYears(10)->format('Y-m-d');
        }

        return 'Unknown';
    }
}
