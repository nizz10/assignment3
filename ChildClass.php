<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		private $manga_name_jpnse;
		private $writer_name_jpnse;
		private $genre;
		private $year;
		private $original_object;

		public function __construct($manga_name, $artist_name, $index, $manga_name_jpnse, $writer_name_jpnse, $genre, $year)
		{
			parent::__construct($manga_name, $artist_name, $index);
			$this->manga_name_jpnse = $manga_name_jpnse;
			$this->writer_name_jpnse = $writer_name_jpnse;
			$this->genre = $genre;
			$this->year = $year;
		}
		public function __toString()
		{
			return "Manga:\t" . parent::get_manga_name() . " (Japanese: " . $this->manga_name_jpnse . ")<br>Writer:\t" . parent::get_writer_name() .
						" (Japanese: " . $this->writer_name_jpnse . ")<br>Genre:\t" . $this->genre . "<br>" . "Year:\t" . $this->year . "<br>";
		}

		public function display_manga_info()
		{
			print "<u>More Information for Manga #" . parent::get_index() . ":</u><br>" . $this->__toString();
		}

		public function get_original_object()
		{
			return $this->original_object;
		}

		public function modify_all_info($manga_name, $artist_name, $index, $manga_name_jpnse, $writer_name_jpnse, $genre, $year)
		{
			parent::modify_all_info($manga_name, $artist_name, $index);
			$this->manga_name_jpnse = $manga_name_jpnse;
			$this->writer_name_jpnse = $writer_name_jpnse;
			$this->genre = $genre;
			$this->year = $year;
		}

	}
