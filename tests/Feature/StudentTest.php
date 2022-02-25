<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentTest extends TestCase
{
  use RefreshDatabase;

  /**
   *  Creates a student, calls the present toggle API endpoint, and asserts the result.
   */
  public function test_present_value_toggles_on_put_request()
  {
    $student = Student::factory()->times(1)->create(['present' => false]);
    $studentId = $student[0]->studentId;
    $this->put("/api/students/$studentId", ['present' => true]);
    $this->assertDatabaseHas('students', [
      'studentId' => $studentId,
      'present' => true
    ]);
  }
}
