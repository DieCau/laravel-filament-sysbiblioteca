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

    protected function afterCreate()
    {
        Notification::make()
        ->title('Libro creado exitosamente.')
        ->body('El libro ha sido creado exitosamente.')
        ->success()
        ->send();   
    }   
}
