<?php
	// This is the file for the parent class

	class ParentClass {
		private $manga_name;
		private $writer_name;
		private $index;

		public function __construct($manga_name, $writer_name, $index)
		{
			$this->manga_name = $manga_name;
			$this->writer_name = $writer_name;
			$this->index = $index;
		}

		public function __toString()
		{
			return "Manga:\t" . $this->manga_name . "<br>" . "Writer:\t" . $this->writer_name . "<br>";
		}

		public function display_manga_info()
		{
			print "<u>Information for Manga #" . $this->index . ":</u><br>" . $this->__toString();
		}

		public function modify_all_info($manga_name, $writer_name, $index)
		{
			$this->manga_name = $manga_name;
			$this->writer_name = $writer_name;
			$this->index = $index;
		}
		public function set_manga_name($manga_name)
		{
			$this->manga_name = $manga_name;
		}
		public function set_writer_name($writer_name)
		{
			$this->manga_name = $writer_name;
		}
		public function set_index($index)
		{
			$this->manga_name = $index;
		}

		public function get_manga_name()
		{
			return $this->manga_name;
		}
		public function get_writer_name()
		{
			return $this->writer_name;
		}
		public function get_index()
		{
			return $this->index;
		}

	}
