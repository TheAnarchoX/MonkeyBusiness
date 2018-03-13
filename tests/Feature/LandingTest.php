<?php
/**
 * Created by PhpStorm.
 * User: jimdv
 * Date: 13-Mar-18
 * Time: 15:02
 */

namespace Feature;


use Tests\TestCase;

class LandingTest extends TestCase {

    public function testRoute() {
        $resp = $this->get('/');
        $resp->assertStatus(200);
    }
}
