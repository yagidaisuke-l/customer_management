<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
class DailyResetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:daily-reset-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // ここにDBリセットやメール送信など処理を書く
        \Log::info("毎日0時に実行されるコマンドが動きました");
        Artisan::call('migrate:fresh', [
            '--seed' => true,
            '--force' => true, // 確認なしで実行
        ]);
    }
}
