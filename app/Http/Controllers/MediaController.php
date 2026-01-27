<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function destroy(int $id): JsonResponse
    {
        $media = Media::findOrFail($id);

        // Hapus file dari storage
        if ($media->file_path && Storage::disk('public')->exists($media->file_path)) {
            Storage::disk('public')->delete($media->file_path);
        }

        // Hapus data dari database
        $media->delete();

        return response()->json([
            'success' => true,
            'message' => 'Foto berhasil dihapus'
        ]);
    }
}
