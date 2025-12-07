<?php

use function Livewire\Volt\{state};
use App\Models\Article;

// ルートモデルバインディング
state(['article' => fn(Article $article) => $article]);

$back = function () {
    return redirect()->route('articles.index');
};

// $edit = function () {
//     return redirect()->route('articles.index');
// };

// $delete = function () {
//     return redirect()->route('articles.index');
// };

?>

<div>
    <a href="{{ route('articles.index') }}">戻る</a>
    <h1>{{ $article->title }}</h1>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <button wire:click="back">一覧へ戻る</button>
    {{-- <button wire:click="create">編集する</button>
    <button wire:click="create">削除する</button> --}}
</div>
