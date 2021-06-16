<?php
// Classe représetant les utilisateurs stockés en base de données
class User 
{
  public int    $id;
  public string $lastname;
  public string $firstname;
  public string $email;
  public string $city;
  public string $city_code;
  public string $adress;
  public string $birth_date;
  public int    $book_id;

  public function setId(int $id)
  {
      $this->id = $id;
  }
  public function getId()
  {
      return $this->id;
  }

  public function setLastname(string $lastname)
  {
        $this->lastname = $lastname;
  }
  public function getLastname()
  {
        return $this->lastname;
  }

  public function setFirstname(string $firstname)
  {
        $this->firstname = $firstname;
  }
  public function getFirstname()
  {
        return $this->firstname;
  }

  public function setEmail(string $email)
  {
        $this->email = $email;
  }
  public function getEmail()
  {
        return $this->email;
  }

  public function setCity(string $city)
  {
        $this->city = $city;
  }
  public function getCity()
  {
        return $this->city;
  }

  public function setCity_code(int $city_code)
  {
        $this->city_code = $city_code;
  }
  public function getCity_code()
  {
        return $this->city_code;
  }

  public function setAdress(string $adress)
  {
        $this->adress = $adress;
  }
  public function getAdress()
  {
        return $this->adress;
  }

  public function setBirth_date(string $birth_date)
  {
        $this->birth_date = $birth_date;
  }
  public function getBirth_date()
  {
        return $this->birth_date;
  }

  public function setBook_id(int $book_id)
  {
        $this->book_id = $book_id;
  }
  public function getBook_id()
  {
        return $this->book_id;
  }
}