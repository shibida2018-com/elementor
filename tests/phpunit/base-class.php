<?php
namespace Elementor\Testing;

class Elementor_Test_Base extends \WP_UnitTestCase {
	use Elementor_Test;

	public function getSelf() {
		return $this;
	}
}
