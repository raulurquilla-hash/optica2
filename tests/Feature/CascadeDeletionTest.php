<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Optometra;
use App\Models\Phone;
use App\Models\Paciente;
use App\Models\Examen;

class CascadeDeletionTest extends TestCase
{
    use RefreshDatabase;

    public function test_optometra_deletion_cascades_to_phone_pacientes_and_examens()
    {
        $optometra = Optometra::factory()->create();

        $phone = Phone::factory()->for($optometra)->create();

        $paciente = Paciente::factory()->for($optometra)->create();

        Examen::factory()->count(2)->create([
            'paciente_id' => $paciente->id,
            'optometra_id' => $optometra->id,
        ]);

        // Sanity checks
        $this->assertDatabaseHas('optometras', ['id' => $optometra->id]);
        $this->assertDatabaseHas('phones', ['id' => $phone->id, 'optometra_id' => $optometra->id]);
        $this->assertDatabaseHas('pacientes', ['id' => $paciente->id, 'optometra_id' => $optometra->id]);
        $this->assertDatabaseCount('examens', 2);

        // Delete optometra
        $optometra->delete();

        // Related records should be deleted
        $this->assertDatabaseMissing('optometras', ['id' => $optometra->id]);
        $this->assertDatabaseMissing('phones', ['id' => $phone->id]);
        $this->assertDatabaseMissing('pacientes', ['id' => $paciente->id]);
        $this->assertDatabaseCount('examens', 0);
    }

    public function test_paciente_deletion_cascades_to_examens()
    {
        $paciente = Paciente::factory()->create();
        $optometra = $paciente->optometra;

        Examen::factory()->count(3)->create([
            'paciente_id' => $paciente->id,
            'optometra_id' => $optometra->id,
        ]);

        $this->assertDatabaseCount('examens', 3);

        $paciente->delete();

        $this->assertDatabaseMissing('pacientes', ['id' => $paciente->id]);
        $this->assertDatabaseCount('examens', 0);
    }
}
