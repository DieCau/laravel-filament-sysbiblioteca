<?php

namespace App\Filament\Resources\LibroResource\Pages;

use App\Filament\Resources\LibroResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditLibro extends EditRecord
{
    protected static string $resource = LibroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        // Redirigir a la lista de libros 
        return $this->getResource()::getUrl('index');       
    }
    
    protected function getCreatedNotification(): ?Notification
    {
        return null;
    } 

    protected function afterSave()
    {
        Notification::make()
        ->title('Libro actualizado exitosamente.')
        ->body('El libro ha sido actualizado exitosamente.')
        ->success()
        ->send();   
    }   
}
