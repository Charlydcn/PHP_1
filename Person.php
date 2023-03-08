<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <title>PERSON</title>
</head>
<body>
    <?php

    class Person
        {
            private string $_lastname;  // Propriétés ou attributs ou variables d'instance
            private string $_firstname;
            private DateTime $_bdate;

            public function __construct(string $lastname, string $firstname, string $bdate) // Constructeur
            {
                $this->_lastname = $lastname;
                $this->_firstname = $firstname;
                $this->_bdate = new DateTime($bdate);
            }

            public function getLastname() // Getters (accesseurs) et Setters (mutateurs)
            {
                return $this->_lastname;
            }
            public function setLastname($lastname)
            {
                $this->_lastname = $lastname;
            }
            public function getName()
            {
                return $this->_firstname;
            }

            public function setName($firstname)
            {
                $this->_firstname = $firstname;
            }
            public function getBdate()
            {
                return $this->_bdate;
            }

            public function setBdate($bdate)
            {
                $this->_bdate = $bdate;
            }

            public function getAge() {
                $now = new DateTime();
                $diff = $this->_bdate->diff($now);
                return $diff->y." ans";
            }

            public function __toString() {
                return $this->_firstname." ".$this->_lastname." a ".$this->getAge()."<br>";
            }
        }
    ?>

</body>
</html>