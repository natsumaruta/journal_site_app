<?php

use function Livewire\Volt\{state};
use App\Models\Article;

// ルートモデルバインディング
state(['article' => fn(Article $article) => $article]);

$back = function () {
    return redirect()->route('articles.index');
};

$edit = function () {
    return redirect()->route('articles.edit', $this->article);
};

$destroy = function () {
    $this->article->delete();
    return redirect()->route('articles.index');
};

?>

<div>
    <a href="{{ route('articles.index') }}" class="button-back">戻る</a>
    <h1>{{ $article->title }}</h1>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <button wire:click="back">一覧へ戻る</button>
    <button wire:click="edit">編集する</button>
    <button wire:click="destroy" wire:confirm="本当に削除しますか？">削除する</button>
</div>
