<?php

namespace Constructive\Glossary\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface GlossaryItemRepositoryInterface
{
    public function all(): Collection;
}
