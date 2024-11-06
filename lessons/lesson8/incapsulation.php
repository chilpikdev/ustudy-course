<?php

/**
 * Что такой объект?
 */
class Student {
    public string $fullName;
    public string $birthday;
    public string $address;
    public int $step;
    public string $groupName;
    protected int $pin;
    private string $password;

    public function about(): string
    {
        return "Men {$this->fullName}, {$this->birthday} jili tuwilg'anman";
    }

    public function study(): string
    {
        return "Men {$this->step} kursta {$this->groupName} toparda oqiyman.";
    }

    public function doHomework(): string
    {
        return "U'yge tapsirma tayarlap atir";
    }

    /**
     * Set Pin
     */
    public function setPin(int $pin): void
    {
        $this->pin = $pin;
    }

    /**
     * Get Pin
     */
    public function getPin(): int
    {
        return $this->pin;
    }

    /**
     * Set Password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}

$student1 = new Student;
$student1->fullName = "O'tkirbay Quwanishbaev";
$student1->birthday = "13.04.2005";
$student1->address = "No'kis qalasi, Ulli jipek joliq 32/64";
$student1->step = 1;
$student1->groupName = "AT";
$student1->setPin(123);
$student1->setPassword('qwerty');

$student2 = new Student;
$student2->fullName = "Ramanov Jalalatdin";
$student2->birthday = "03.02.2004";
$student2->address = "No'kis qalasi, Ulli jipek joliq 32/65";
$student2->step = 4;
$student2->groupName = "v1";
$student2->setPin(124);
$student2->setPassword("123asd");

// echo $student1->about();
// echo "<br>";
// echo $student1->study();
// echo "<br>";
// echo $student1->doHomework();
// echo "<br>";
// echo $student1->getPin();
// echo "<br>";

print_r($student1);

echo "<br>";
echo "<br>";

echo gettype($student1);

echo "<br>";
echo "<br>";

// echo $student2->about();
// echo "<br>";
// echo $student2->study();
// echo "<br>";
// echo $student2->doHomework();
// echo "<br>";
// echo $student2->getPin();
// echo "<br>";

print_r($student2);

echo "<br>";
echo "<br>";

echo gettype($student2);
