<?php
class Book
 {
  public int    $id_book;
  public string $title;
  public string $author;
  public string $resume;
  public string $release_date;
  public string $genre;
  public string $edition;
  public int    $number_pages;
  public string $availability;
  public ?int    $user_id;
  public ?string $borrowing_date;
  public ?string $rendering_date;

    public function __construct($data=null) 
    {
        if($data)
        {
            foreach($data as $key => $value) 
            {
                $setter = "set" . ucfirst($key);
                if(method_exists($this, $setter))
                {
                    $this->$setter($value);
                }
            }
        }
    }

    public function setId(int $id_book)
    {
        $this->id_book = $id_book;
    }
    public function getId_book()
    {
        return $this->id_book;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;

    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }
    public function getAuthor()
    {
        return $this->author;
    }

    public function setResume(string $resume)
    {
        $this->resume = $resume;
    }
    public function getResume()
    {
        return $this->resume;
    }

    public function setRelease_date(string $release_date)
    {
        $this->release_date = $release_date;
    }
    public function getRelease_date()
    {
        return $this->release_date;
    }

    public function setGenre(string $genre)
    {
        $this->genre = $genre;
    }
    public function getGenre()
    {
        return $this->genre;
    }

    public function setEdition(string $edition)
    {
        $this->edition = $edition;
    }
    public function getEdition()
    {
        return $this->edition;
    }

    public function setNumber_pages(int $number_pages)
    {
        $this->number_pages = $number_pages;
    }
    public function getNumber_pages()
    {
        return $this->number_pages;
    }

    public function setAvailability(string $availability)
    {
        $this->availability = $availability;
    }
    public function getAvailability()
    {
        return $this->availability;
    }

    public function setUser_id(?int $user_id)
    {
        $this->user_id = $user_id;
    }
    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setBorrowing_date(?string $borrowing_date)
    {
        $this->borrowing_date = $borrowing_date;
    }
    public function getBorrowing_date()
    {
        return $this->borrowing_date;
    }

    public function setRendering_date(?string $rendering_date)
    {
        $this->rendering_date = $rendering_date;
    }
    public function getRendering_date()
    {
        return $this->rendering_date;
    } 

}


