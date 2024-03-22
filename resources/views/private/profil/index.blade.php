@extends('private._layouts.app')

@section('title', 'Mon profil')

@section('contenu')
<div class="content-wrapper">

            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                      <h2>Mon profil</h2>
                    </div>
                    <div class="d-flex">
                      <i class="mdi mdi-home text-muted hover-cursor"></i>
                      <p class="text-muted mb-0 hover-cursor">
                        &nbsp;/&nbsp;-&nbsp;
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--########################################### Mon profil ############################################ -->

            <div class="main-content">
              <div class="page-content">
                <div class="container-fluid">
                  <div class="profile-foreground position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg">
                      <img
                        src="assets/images/profile-bg.jpg"
                        alt=""
                        class="profile-wid-img"
                      />
                    </div>
                  </div>
                  <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                    <div class="row g-4">
                      <!--end col-->
                      <div class="col">
                      <div class="p-2">
                                @if (auth()->user()->role == 'admin' || auth()->user()->role =='abonne')
                                <h2 class="text-dark mb-1">{{ auth()->user()->nom }} {{ auth()->user()->prenom }}</h2>
                                @endif
                                @if (auth()->user()->role == 'promoteur')
                                <h2 class="text-dark mb-1">{{ auth()->user()->nomcomplet }} </h2>
                                @endif
                            </div>
                      </div>
                      <!--end col-->
                      
                      <!--end col-->
                    </div>
                    <!--end row-->
                  </div>

                  @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                  <div class="row">
                    <div class="col-lg-12">
                      <div>
                        <div class="d-flex">
                          <!-- Nav tabs -->
                          <ul
                            class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1"
                            role="tablist"
                          >
                            <li class="nav-item">
                              <a
                                class="nav-link fs-14 active"
                                data-bs-toggle="tab"
                                href="#overview-tab"
                                role="tab"
                              >
                                <i
                                  class="ri-airplay-fill d-inline-block d-md-none"
                                ></i>
                                <span class="d-none d-md-inline-block"
                                  >Mes informations</span
                                >
                              </a>
                            </li>
                            <li class="nav-item">
                              <a
                                class="nav-link fs-14"
                                data-bs-toggle="tab"
                                href="#activities"
                                role="tab"
                              >
                                <i
                                  class="ri-list-unordered d-inline-block d-md-none"
                                ></i>
                                <span class="d-none d-md-inline-block"
                                  >Les évenements</span
                                >
                              </a>
                            </li>
                            <li class="nav-item">
                              <a
                                class="nav-link fs-14"
                                data-bs-toggle="tab"
                                href="#projects"
                                role="tab"
                              >
                                <i
                                  class="ri-price-tag-line d-inline-block d-md-none"
                                ></i>
                                <span class="d-none d-md-inline-block"
                                  >Mes favoris</span
                                >
                              </a>
                            </li>
                            <li class="nav-item">
                              <a
                                class="nav-link fs-14"
                                data-bs-toggle="tab"
                                href="#documents"
                                role="tab"
                              >
                                <i
                                  class="ri-folder-4-line d-inline-block d-md-none"
                                ></i>
                                <span class="d-none d-md-inline-block"
                                  >Paramètre du compte</span
                                >
                              </a>
                            </li>
                          </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                          <div
                            class="tab-pane active"
                            id="overview-tab"
                            role="tabpanel"
                          >
                            @if(auth()->user()->role == 'admin')
                            <div class="row">
                              <div class="col-xxl-7">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="table-responsive">
                                   
                                      <table
                                        class="table table-borderless mb-0"
                                      >
                                     
                                        <tbody>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Nom prénom :
                                            </th>
                                            <td class="text-muted">
                                              {{ auth()->user()->nom }} {{ auth()->user()->prenom }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Mobile :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->telephone }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              E-mail :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->email }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Date d'inscription
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->created_at }}
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <!-- end card body -->
                                </div>
                                <!-- end card -->
                              </div>

                              <!--end col-->
                            </div>
                            @endif

                            @if(auth()->user()->role == 'promoteur')
                            <div class="row">
                               <div class="col-xxl-7">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="table-responsive">
                                      <table
                                        class="table table-borderless mb-0"
                                      >
                                        <tbody>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Nom Complet :
                                            </th>
                                            <td class="text-muted">
                                              {{ auth()->user()->nomcomplet }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Mobile :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->telephone }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              E-mail :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->email }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Adresse :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->adresse }}
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Domaine d'activité :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->activites }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Date d'inscription
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->created_at }}
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <!-- end card body -->
                                </div>
                                <!-- end card -->
                              </div>

                              <div class="col-xxl-5">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="table-responsive">
                                    <img src="{{ auth()->user()->photo }}" alt=""  class="image-profil">
                                    </div>
                                    </div>
                                  <!-- end card body -->
                                </div>
                                <!-- end card -->
                              </div>

                              <!--end col-->
                            </div>
                            @endif

                            @if(auth()->user()->role == 'abonne')
                            <div class="row">
                              <div class="col-xxl-3">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="table-responsive">
                                      <table
                                        class="table table-borderless mb-0"
                                      >
                                        <tbody>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Nom Prénom :
                                            </th>
                                            <td class="text-muted">
                                              {{ auth()->user()->nom }} {{ auth()->user()->prenom }}
                                            </td>
                                          </tr>
                                         <tr>
                                            <th class="ps-0" scope="row">
                                              Mobile :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->telephone }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              E-mail :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->email }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Adresse :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->adresse }}
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Préférences :
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->preferences }}
                                            </td>
                                          </tr>
                                          <tr>
                                            <th class="ps-0" scope="row">
                                              Date d'inscription
                                            </th>
                                            <td class="text-muted">
                                            {{ auth()->user()->created_at }}
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <!-- end card body -->
                                </div>
                                <!-- end card -->
                              </div>

                              <!--end col-->
                            </div>
                            @endif
                            <!--end row-->
                          </div>
                          <div
                            class="tab-pane fade"
                            id="activities"
                            role="tabpanel"
                          >
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title mb-3">
                                  Liste des mes évenements
                                </h5>
                                <section id="blog" class="blog">
                                  <div class="container" data-aos="fade-up">
                                    <div class="row">
                                      <div class="col-lg-12 entries">
                                        <article class="entry">
                                          <div class="entry-img">
                                            <img
                                              th:src="@{assets_private/img/blog/IMG-20240117-WA0002.jpg}"
                                              alt=""
                                              class="img-fluid"
                                            />
                                          </div>

                                          <h2 class="entry-title">
                                            <a href="blog-single.html"
                                              >FETE DE LA MUSIQUE AU BURKINA
                                              FASO</a
                                            >
                                          </h2>

                                          <div class="entry-meta">
                                            <ul>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-person"></i>
                                                <a href="blog-single.html"
                                                  >John Doe</a
                                                >
                                              </li>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-clock"></i>
                                                <a href="blog-single.html"
                                                  ><time datetime="2020-01-01"
                                                    >Jan 1, 2020</time
                                                  ></a
                                                >
                                              </li>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-chat-dots"></i>
                                                <a href="blog-single.html"
                                                  >12 Comments</a
                                                >
                                              </li>
                                            </ul>
                                          </div>

                                          <div class="entry-content">
                                            <p>
                                              La fete de la musique au Burkina
                                              Faso, célébrée le 21juin, est une
                                              joyeuse célébration de la
                                              diversité musicale du pays. Des
                                              artistes locaux et internationaux
                                              captive les spectateurs avec des
                                              performances variée, créant une
                                              atmosphère festive dans tous le
                                              pays. cette journée devient un
                                              moment ou la musique transcende
                                              les frontières, unifiant les
                                              communautés et célébrant la
                                              richesse culturelle du Burkina
                                              Faso.
                                            </p>
                                            <div class="read-more">
                                              <a href="blog-single.html"
                                                >Read More</a
                                              >
                                            </div>
                                          </div>
                                        </article>
                                        <!-- End blog entry -->

                                        <article class="entry">
                                          <div class="entry-img">
                                            <img
                                              th:src="@{assets_private/img/blog/IMG-20240117-WA0002.jpg}"
                                              alt=""
                                              class="img-fluid"
                                            />
                                          </div>

                                          <h2 class="entry-title">
                                            <a href="blog-single.html">SIAO </a>
                                          </h2>

                                          <div class="entry-meta">
                                            <ul>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-person"></i>
                                                <a href="blog-single.html"
                                                  >John Doe</a
                                                >
                                              </li>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-clock"></i>
                                                <a href="blog-single.html"
                                                  ><time datetime="2020-01-01"
                                                    >Jan 1, 2020</time
                                                  ></a
                                                >
                                              </li>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-chat-dots"></i>
                                                <a href="blog-single.html"
                                                  >12 Comments</a
                                                >
                                              </li>
                                            </ul>
                                          </div>

                                          <div class="entry-content">
                                            <p>
                                              Le SIAO (Salon International de
                                              l'Artisanat de Ouagadougou) est un
                                              événement majeur au Burkina Faso,
                                              organisé tous les deux ans. Il
                                              s'agit d'un salon dédié à la
                                              promotion et à la valorisation du
                                              secteur de l'artisanat, mettant en
                                              avant le savoir-faire artisanal
                                              local et international. Le SIAO
                                              offre une plateforme unique aux
                                              artisans pour exposer et
                                              commercialiser leurs produits,
                                              ainsi qu'un espace d'échange
                                              culturel et économique. Cet
                                              événement contribue
                                              significativement à la promotion
                                              de l'artisanat, au renforcement
                                              des échanges entre artisans et à
                                              la découverte de la diversité
                                              artistique et culturelle.
                                            </p>
                                            <div class="read-more">
                                              <a href="blog-single.html"
                                                >Read More</a
                                              >
                                            </div>
                                          </div>
                                        </article>
                                        <!-- End blog entry -->

                                        <div class="blog-pagination">
                                          <ul class="justify-content-center">
                                            <li><a href="#">1</a></li>
                                            <li class="active">
                                              <a href="#">2</a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- End blog entries list -->
                                    </div>
                                  </div>
                                </section>
                              </div>
                              <!--end card-body-->
                            </div>
                            <!--end card-->
                          </div>
                          <!--end tab-pane-->
                          <div
                            class="tab-pane fade"
                            id="projects"
                            role="tabpanel"
                          >
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title mb-3">
                                  Liste des mes évenements favoris
                                </h5>
                                <section id="blog" class="blog">
                                  <div class="container" data-aos="fade-up">
                                    <div class="row">
                                      <div class="col-lg-12 entries">
                                        <article class="entry">
                                          <div class="entry-img">
                                            <img
                                              th:src="@{assets_private/img/image-3.jpg}"
                                              alt=""
                                              class="img-fluid"
                                            />
                                          </div>

                                          <h2 class="entry-title">
                                            <a href="blog-single.html"
                                              >SOIRE ATIPIQUE DES LOISIRS</a
                                            >
                                          </h2>

                                          <div class="entry-meta">
                                            <ul>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-person"></i>
                                                <a href="blog-single.html"
                                                  >John Doe</a
                                                >
                                              </li>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-clock"></i>
                                                <a href="blog-single.html"
                                                  ><time datetime="2020-01-01"
                                                    >Jan 1, 2020</time
                                                  ></a
                                                >
                                              </li>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-chat-dots"></i>
                                                <a href="blog-single.html"
                                                  >12 Comments</a
                                                >
                                              </li>
                                            </ul>
                                          </div>

                                          <div class="entry-content">
                                            <p>
                                              La fete de la musique au Burkina
                                              Faso, célébrée le 21juin, est une
                                              joyeuse célébration de la
                                              diversité musicale du pays. Des
                                              artistes locaux et internationaux
                                              captive les spectateurs avec des
                                              performances variée, créant une
                                              atmosphère festive dans tous le
                                              pays. cette journée devient un
                                              moment ou la musique transcende
                                              les frontières, unifiant les
                                              communautés et célébrant la
                                              richesse culturelle du Burkina
                                              Faso.
                                            </p>
                                            <div class="read-more">
                                              <a href="blog-single.html"
                                                >Read More</a
                                              >
                                            </div>
                                          </div>
                                        </article>
                                        <!-- End blog entry -->

                                        <article class="entry">
                                          <div class="entry-img">
                                            <img
                                              th:src="@{assets_private/img/image-4.jpg}"
                                              alt=""
                                              class="img-fluid"
                                            />
                                          </div>

                                          <h2 class="entry-title">
                                            <a href="blog-single.html">SIAO </a>
                                          </h2>

                                          <div class="entry-meta">
                                            <ul>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-person"></i>
                                                <a href="blog-single.html"
                                                  >John Doe</a
                                                >
                                              </li>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-clock"></i>
                                                <a href="blog-single.html"
                                                  ><time datetime="2020-01-01"
                                                    >Jan 1, 2020</time
                                                  ></a
                                                >
                                              </li>
                                              <li
                                                class="d-flex align-items-center"
                                              >
                                                <i class="bi bi-chat-dots"></i>
                                                <a href="blog-single.html"
                                                  >12 Comments</a
                                                >
                                              </li>
                                            </ul>
                                          </div>

                                          <div class="entry-content">
                                            <p>
                                              Le SIAO (Salon International de
                                              l'Artisanat de Ouagadougou) est un
                                              événement majeur au Burkina Faso,
                                              organisé tous les deux ans. Il
                                              s'agit d'un salon dédié à la
                                              promotion et à la valorisation du
                                              secteur de l'artisanat, mettant en
                                              avant le savoir-faire artisanal
                                              local et international. Le SIAO
                                              offre une plateforme unique aux
                                              artisans pour exposer et
                                              commercialiser leurs produits,
                                              ainsi qu'un espace d'échange
                                              culturel et économique. Cet
                                              événement contribue
                                              significativement à la promotion
                                              de l'artisanat, au renforcement
                                              des échanges entre artisans et à
                                              la découverte de la diversité
                                              artistique et culturelle.
                                            </p>
                                            <div class="read-more">
                                              <a href="blog-single.html"
                                                >Read More</a
                                              >
                                            </div>
                                          </div>
                                        </article>
                                        <!-- End blog entry -->

                                        <div class="blog-pagination">
                                          <ul class="justify-content-center">
                                            <li><a href="#">1</a></li>
                                            <li class="active">
                                              <a href="#">2</a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- End blog entries list -->
                                    </div>
                                  </div>
                                </section>
                              </div>
                              <!--end card-body-->
                            </div>
                            <!--end card-->
                          </div>
                          <!--end tab-pane-->
                          <div
                            class="tab-pane fade"
                            id="documents"
                            role="tabpanel"
                          >
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title mb-3">
                                  Edition les informations de mon compte
                                </h5>
                                <br />
                                <form action="{{ route('private.profil-edition') }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    @if (auth()->user()->role == 'admin' || auth()->user()->role ==
                                                    'abonne')
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="fullname" class="form-label">Nom</label>
                                                            <input type="text" name="nom" class="form-control"
                                                                id="fullname" placeholder="Entrez votre nom"
                                                                value="{{ auth()->user()->nom }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="fullname" class="form-label">Prénom</label>
                                                            <input type="text" name="prenom" class="form-control"
                                                                id="fullname" placeholder="Entrez votre prénom"
                                                                value="{{ auth()->user()->prenom }}" />
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @if (auth()->user()->role == 'promoteur')
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="fullname" class="form-label">Nom complet</label>
                                                            <input type="text" name="nomcomplet" class="form-control"
                                                                id="fullname" placeholder="Entrez votre nom complet"
                                                                value="{{ auth()->user()->nomcomplet }}" />
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <!--end col-->
                                                     <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="email" class="form-labonneabel">E-mail</label>
                                                            <input type="email" name="email" class="form-control"
                                                                id="email" placeholder="Entrez votre email"
                                                                value="{{ auth()->user()->email }}" />
                                                        </div>
                                                    </div> 
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="numero" class="form-label">Numéro de
                                                                telephone</label>
                                                            <input type="text" class="form-control" name="telephone"
                                                                id="telephone"
                                                                placeholder="Entrez votre numero de telephone"
                                                                value="{{ auth()->user()->telephone }}" />
                                                        </div>
                                                    </div>
                                                    @if (auth()->user()->role == 'promoteur')
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="siege" class="form-label">Siège</label>
                                                            <input type="text" name="siege" class="form-control"
                                                                id="siege" placeholder="Entrez votre siége"
                                                                value="{{ auth()->user()->siege }}" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="adresse" class="form-label">Adresse</label>
                                                            <input type="text" name="adresse" class="form-control"
                                                                id="siege" placeholder="Entrez votre adresse"
                                                                value="{{ auth()->user()->adresse }}" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="skillsInput" class="form-label">Domaines
                                                                d'activités</label>
                                                            <input type="text" name="activites" class="form-control"
                                                                id="siege"
                                                                placeholder="Entrez vos domaoines d'activités"
                                                                value="{{ auth()->user()->activites }}" />
                                                        </div>
                                                    </div>

                                                    @endif

                                                    @if (auth()->user()->role == 'abonne')
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="adresse" class="form-label">Adresse</label>
                                                            <input type="text" name="adresse" class="form-control"
                                                                id="siege" placeholder="Entrez votre adresse"
                                                                value="{{ auth()->user()->adresse }}" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="skillsInput"
                                                                class="form-label">Préférences</label>
                                                            <input type="text" name="preferences" class="form-control"
                                                                id="siege" placeholder="Entrez votre adresse"
                                                                value="{{ auth()->user()->preferences }}" />
                                                        </div>
                                                    </div>
                                                    @endif

                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit"
                                                                onclick="return confirm('Etes vous sûr de vouloir enrregistré les nouveaux changement ???')"
                                                                class="btn btn-primary text-white">
                                                                Sauvegarder les changements
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                              </div>
                            </div>
                            <br />

                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title mb-3">
                                  Edition les informations d'authentification
                                </h5>
                                <br />
                                <form action="javascript:void(0);">
                                  <div class="row g-2">
                                    <div class="col-lg-4">
                                      <div>
                                        <label
                                          for="oldpasswordInput"
                                          class="form-label"
                                          >Ancien mot de passe*</label
                                        >
                                        <input
                                          type="password"
                                          class="form-control"
                                          id="oldpasswordInput"
                                          placeholder="Entrez votre mot de passe actuel"
                                        />
                                      </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                      <div>
                                        <label
                                          for="newpasswordInput"
                                          class="form-label"
                                          >Nouveau mot de passe*</label
                                        >
                                        <input
                                          type="password"
                                          class="form-control"
                                          id="newpasswordInput"
                                          placeholder="Entrez votre nouveau mot de passe"
                                        />
                                      </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                      <div>
                                        <label
                                          for="confirmpasswordInput"
                                          class="form-label"
                                          >Confirmer votre nouveau mot de
                                          passe*</label
                                        >
                                        <input
                                          type="password"
                                          class="form-control"
                                          id="confirmpasswordInput"
                                          placeholder="Répétez votre nouveau mot de passe"
                                        />
                                      </div>
                                    </div>
                                    <!--end col-->
                                    <br />
                                    <div class="col-lg-12">
                                      <div class="mb-3">
                                        <a
                                          href="javascript:void(0);"
                                          class="link-primary text-decoration-underline"
                                          >Mot de passe oublier ?</a
                                        >
                                      </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                      <div class="text-end">
                                        <button
                                          type="submit"
                                          class="btn btn-primary text-white"
                                        >
                                          Changer de mot de passe
                                        </button>
                                      </div>
                                    </div>
                                    <!--end col-->
                                  </div>
                                  <!--end row-->
                                </form>
                              </div>
                            </div>
                          </div>
                          <!--end tab-pane-->
                        </div>
                        <!--end tab-content-->
                      </div>
                    </div>
                    <!--end col-->
                  </div>
                  <!--end row-->
                </div>
                <!-- container-fluid -->
              </div>
              <!-- End Page-content -->

              <footer class="footer">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-6">
                      <script>
                        document.write(new Date().getFullYear());
                      </script>
                      © FasoEvent.
                    </div>
                    <div class="col-sm-6">
                      <div class="text-sm-end d-none d-sm-block">
                        Developpé par le groupe de java unz
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
            </div>

            <!-- fin de bienvenue -->

            <!-- main-panel ends -->
          </div>
@endsection