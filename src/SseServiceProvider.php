<?php declare(strict_types=1);

namespace Benrowe\Laravel\BroadcastSSE;

use Illuminate\Support\ServiceProvider;

class SseServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register(): void
    {
    }

    public function boot(): void
    {
    }

    public function provides(): array
    {
    }
}
