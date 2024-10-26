<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Gemini\Laravel\Facades\Gemini;

class MedicalConsultationController extends Controller
{

    public function index()
    {
        return view('consultation.index');
    }

    public function analyze(Request $request)
    {

        $symptoms = $request->input('symptoms');
        $prompt = "Atue como um médico analisando os seguintes sintomas e forneça uma possível condição médica, lembrando que isso é apenas uma análise preliminar e o paciente deve procurar um médico para diagnóstico preciso. Sintomas: " . $symptoms;

        $result = Gemini::geminiPro()->generateContent($prompt);

            $responseBody = $result->text();
            $diagnosis = $responseBody ?? 'Não foi possível identificar uma condição com os sintomas fornecidos.';

            return view('consultation.result', [
                'analysis' => $diagnosis,
                'symptoms' => $request->symptoms
            ]);

        }
}
