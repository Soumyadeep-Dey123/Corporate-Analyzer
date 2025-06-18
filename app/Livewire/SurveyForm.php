<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DemoSurvey;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class SurveyForm extends Component
{
    public $currentStep = 0;

    public $formData = [
        'name'            => '',
        'email'           => '',
        'department'      => '',
        'position'        => '',
        'workExperience'  => '',
        'engagement'      => 0,
        'satisfaction'    => 0,
        'workLifeBalance' => 0,
        'communication'   => 0,
        'leadership'      => 0,
        'growth'          => 0,
        'recommend'       => 0,
        'feedback'        => '',
        'improvements'    => '',
    ];

    /* ---------- navigation ---------- */
    public function nextStep()     { $this->currentStep = min(3, $this->currentStep + 1); }
    public function previousStep() { $this->currentStep = max(0, $this->currentStep - 1); }

    /* ---------- star‑rating setter ---------- */
    public function setRating(string $field, int $value)
    {
        logger("$field set to $value");
        $this->formData[$field] = $value;
    }

    /* ---------- validation ---------- */
    protected function rules()
    {
        return [
            'formData.name'            => 'required|string|max:255',
            'formData.email'           => 'required|email|max:255',
            'formData.department'      => 'nullable|string|max:255',
            'formData.position'        => 'nullable|string|max:255',
            'formData.workExperience'  => 'nullable|string|max:255',
            // ratings 1‑5
            'formData.engagement'      => 'integer|between:1,5',
            'formData.satisfaction'    => 'integer|between:1,5',
            'formData.workLifeBalance' => 'integer|between:1,5',
            'formData.communication'   => 'integer|between:1,5',
            'formData.leadership'      => 'integer|between:1,5',
            'formData.growth'          => 'integer|between:1,5',
            'formData.recommend'       => 'integer|between:1,5',
            // text areas
            'formData.feedback'        => 'nullable|string',
            'formData.improvements'    => 'nullable|string',
        ];
    }

    /* ---------- submit ---------- */
    public function submit()
{
    $data    = $this->validate();

    $payload = collect($data['formData'])
        ->mapWithKeys(fn ($v, $k) => [Str::snake($k) => $v])
        ->toArray();

    Log::debug('survey payload', $payload);   // 👈 watch storage/logs/laravel.log
    DemoSurvey::create($payload);

    session()->flash('message', 'Thank you for your feedback!');
    $this->reset(['formData', 'currentStep']);
}

    public function render()
    {
        return view('livewire.survey-form');
    }
}