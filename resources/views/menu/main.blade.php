<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="https://bootstrap-4.ru/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        GBParse
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('news.all') }}">Новости</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('news.categories') }}">Категории</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.admin') }}">Админка</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="{{ route('news.add') }}" class="btn btn-outline-success my-2 my-sm-0" type="submit">Добавить новость</a>
      </form>
    </div>
</nav>
