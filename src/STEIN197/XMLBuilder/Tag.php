<?php
	namespace STEIN197\XMLBuilder;

	class Tag {

		private $htmlSelfClosedTags = [
			'area',
			'base',
			'br',
			'col',
			'embed',
			'hr',
			'img',
			'input',
			'link',
			'meta',
			'param',
			'source',
			'track',
			'wbr',
			'command',
			'keygen',
			'menuitem',
		];

		private $name;
		private $content;
		private $attributes;

		public function __construct(string $name, $content = [], array $attributes = []) {
			$this->name = $name;
			$this->content = $content;
			$this->attributes = $attributes;
		}

		public function getMinified(): string {}
		public function getBeautified(): string {}
		private function getBuilder(): Builder {}
		private function getParent(): self {}
	}