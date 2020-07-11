# Context

> 管理一次请求生命周期中的数据 [![Build Status](https://travis-ci.org/LingxiTeam/laravel-context.svg?branch=master)](https://travis-ci.org/LingxiTeam/laravel-context.svg?branch=master)[![StyleCI](https://styleci.io/repos/72192760/shield)](https://styleci.io/repos/72192760)[![Latest Stable Version](https://poser.pugx.org/talk/context/v/stable)](https://packagist.org/packages/talk/context)[![Total Downloads](https://poser.pugx.org/talk/context/downloads)](https://packagist.org/packages/talk/context)[![License](https://poser.pugx.org/talk/context/license)](https://packagist.org/packages/talk/context)

### 声明
forked from [ailuoy/laravel-context](https://github.com/ailuoy/laravel-context)

### Install

```bash
composer require talk/laravel-context

Talk\Context\ContextServiceProvider::class,

'Context' => Talk\Context\ContextFacade::class,
```

### Usage

```
<?php

Context::set('user', User::find(request('user_id')));

Context::get('user');

Context::all();
```
