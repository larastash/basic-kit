<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Process\Process;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('larastash:icons', function () {
    if ($this->confirm('Do you want to install Lucide icons package?', false)) {
        $this->info('Starting Lucide icons installation...');

        $process = new Process(['composer', 'require', 'technikermathe/blade-lucide-icons']);
        $process->setWorkingDirectory(base_path());

        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
        });

        $this->newLine();

        if (!$process->isSuccessful()) {
            $this->error('Installation failed!');
            $this->error($process->getErrorOutput());
            return 1;
        }

        $this->info('✅ Lucide icons installed successfully!');

        $this->newLine();

        $this->comment('You can now use Lucide icons in your Blade templates:');
        $this->comment('<x-icon name="lucide-home" class="shrink-0 size-5" />');
    }
})->purpose('Install a Lucide icons');
