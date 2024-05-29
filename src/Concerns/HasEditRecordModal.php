<?php

namespace Mokhosh\FilamentKanban\Concerns;

use Illuminate\Database\Eloquent\Model;

trait HasEditRecordModal
{
    public bool $disableEditModal = false;

    public ?array $editModalState = [];

    public null | int | string $editModalRecordId = null;

    protected string $editModalElementId = 'kanban--edit-record-modal';

    protected string $editModalTitle = 'Edit Record';

    protected bool $editModalSlideOver = false;

    protected string $editModalWidth = '2xl';

    protected string $editModalSaveButtonLabel = 'Save';

    protected string $editModalCancelButtonLabel = 'Cancel';

    public function handleRecordClick(int | string $recordId): void
    {
        $this->editModalRecordId = $recordId;

        $this->dispatch('open-modal', id: $this->editModalElementId);
    }

    public function handleFormSubmit(): void
    {
        $this->editModalRecordId = null;

        $this->dispatch('close-modal', id: $this->editModalElementId);
    }

    protected function getEditModalTitle(): string
    {
        return $this->editModalTitle;
    }

    protected function getEditModalSlideOver(): bool
    {
        return $this->editModalSlideOver;
    }

    protected function getEditModalWidth(): string
    {
        return $this->editModalWidth;
    }

    protected function getEditModalSaveButtonLabel(): string
    {
        return $this->editModalSaveButtonLabel;
    }

    protected function getEditModalCancelButtonLabel(): string
    {
        return $this->editModalCancelButtonLabel;
    }
}
