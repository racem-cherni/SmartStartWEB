<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @User/Default/entreprisehome.html.twig */
class __TwigTemplate_58919779e91a6029b66ca0b0dc63cc31507744a5f3f75b1412ea06ddcb39373d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/entreprisehome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/entreprisehome.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@User/Default/entreprisehome.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 4
        echo "    <header id=\"header\" id=\"home\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between d-flex\">
                <div id=\"logo\">
                    <a href=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"width:158px;height:30px;\"/></a>
                </div>
                <nav id=\"nav-menu-container\">
                    <ul class=\"nav-menu\">
                        <li class=\"menu-active\"><a href=";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Home</a></li>
                        <li class=\"menu-has-children\"><a href=\"\">Les Offres</a>
                            <ul>
                                <li><a href=";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_offre");
        echo ">Ajouter une offre</a></li>
                                <li><a href=";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mes_offre");
        echo ">Consulter vos offres</a></li>
                                <li><a href=";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_offre");
        echo ">Consulter toutes les offres</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-has-children\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_new");
        echo "\"><p>Envoyer Reclamation</p></a>
                        <li class=\"menu-has-children\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index");
        echo "\">Les Formations</a>
                            <ul>
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_new");
        echo "\">Ajouter une formation</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index");
        echo "\">Consulter vos formations</a></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscrip_affich_all");
        echo "\">Consulter les inscriptions </a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index_all");
        echo "\">Consulter toutes les formations</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_nombres");
        echo "\"> Listes des inscrits aux formations </a></li>

                            </ul>
                        </li>
                        <li class=\"menu-has-children\"><a href=\"\">Crowdfundings</a>
                            <ul>
                                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_new");
        echo "\">Ajouter un projet</a></li>
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index");
        echo "\">Consulter vos projets</a></li>
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_indexall");
        echo "\">Consulter toutes les projets</a></li>
                                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show_invest");
        echo "\">Consulter Mes Invesstissement</a></li>

                                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index");
        echo "\">Mes Projet Favorite Projet</a></li>
                            </ul>
                        </li>

                        <li class=\"menu-has-children\"><a href=\"\"><p>connected as : ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</p></a>
                            <ul>
                                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mon_profil");
        echo "\">Mon Profil</a></li>
                                <li><a href=\"\">Mes Offres</a></li>
                                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index");
        echo "\">Mes Formations</a></li>
                                <li><a href=";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherInterview");
        echo ">Mes Entretiens</a></li>
                                <li><a href=\"\">Mes Crowdfundings</a></li>
                                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 60
        echo "    <section class=\"banner-area relative\" id=\"home\">
        <div class=\"overlay overlay-bg\"></div>
        <div class=\"container\">
            <div class=\"row fullscreen d-flex align-items-center justify-content-center\">
                <div class=\"banner-content col-lg-12\">
                    <h1 class=\"text-white\">
                        <!--<span>1500+</span> Jobs posted last week -->
                    </h1>
                    <form action=\"search.html\" class=\"serach-form-area\">
                        <div class=\"row justify-content-center form-wrap\">
                            <div class=\"col-lg-4 form-cols\">
                                <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"what are you looging for?\">
                            </div>
                            <div class=\"col-lg-3 form-cols\">
                                <div class=\"default-select\" id=\"default-selects\">
                                    <select>
                                        <option value=\"1\">Select area</option>
                                        <option value=\"2\">Dhaka</option>
                                        <option value=\"3\">Rajshahi</option>
                                        <option value=\"4\">Barishal</option>
                                        <option value=\"5\">Noakhali</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-lg-3 form-cols\">
                                <div class=\"default-select\" id=\"default-selects2\">
                                    <select>
                                        <option value=\"1\">All Category</option>
                                        <option value=\"2\">Medical</option>
                                        <option value=\"3\">Technology</option>
                                        <option value=\"4\">Goverment</option>
                                        <option value=\"5\">Development</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-lg-2 form-cols\">
                                <button type=\"button\" class=\"btn btn-info\">
                                    <span class=\"lnr lnr-magnifier\"></span> Search
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--<p class=\"text-white\"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>-->
                </div>
            </div>
        </div>
    </section>
    <section class=\"features-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single-feature\">
                        <h4>Searching</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single-feature\">
                        <h4>Applying</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single-feature\">
                        <h4>Security</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single-feature\">
                        <h4>Notifications</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 148
        echo "    <section class=\"popular-post-area pt-100\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"active-popular-post-carusel\">
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img class=\"img-fluid\" src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End popular-post Area -->

    <section class=\"counter a\" style=\"margin-bottom: 100px; margin-top: 30px; background-color: #DA0833\">
        <div align=\"center\">
            <table class=\"t\">
                <tr>
                    <td>
                        <div class=\"container\">
                            <div>
                                <div class=\"counter-text\">

                                    <h3>1000</h3>
                                    <p>Jobs Posted</p>
                                </div>
                            </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>207</h3>
                                <p>All Companies</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>700+</h3>
                                <p>Total Members</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>802+</h3>
                                <p>Happy Members</p>
                            </div>
                        </div>
        </div>
        </td>
        </tr>
        </table>
        </div>
    </section>

    <!-- Start feature-cat Area -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/entreprisehome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 148,  297 => 147,  202 => 60,  193 => 59,  174 => 49,  169 => 47,  165 => 46,  160 => 44,  155 => 42,  148 => 38,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  101 => 21,  97 => 20,  91 => 17,  87 => 16,  83 => 15,  77 => 12,  68 => 8,  62 => 4,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block nav %}
    <header id=\"header\" id=\"home\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between d-flex\">
                <div id=\"logo\">
                    <a href={{ path('index') }}><img src=\"{{asset('img/logo.png')}}\" alt=\"\" title=\"\" style=\"width:158px;height:30px;\"/></a>
                </div>
                <nav id=\"nav-menu-container\">
                    <ul class=\"nav-menu\">
                        <li class=\"menu-active\"><a href={{ path('index') }}>Home</a></li>
                        <li class=\"menu-has-children\"><a href=\"\">Les Offres</a>
                            <ul>
                                <li><a href={{ path('ajouter_offre') }}>Ajouter une offre</a></li>
                                <li><a href={{ path('mes_offre') }}>Consulter vos offres</a></li>
                                <li><a href={{ path('read_offre') }}>Consulter toutes les offres</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-has-children\"><a href=\"{{ path('reclamation_new') }}\"><p>Envoyer Reclamation</p></a>
                        <li class=\"menu-has-children\"><a href=\"{{ path('formations_index')}}\">Les Formations</a>
                            <ul>
                                <li><a href=\"{{ path('formations_new')}}\">Ajouter une formation</a></li>
                                <li><a href=\"{{ path('formations_index')}}\">Consulter vos formations</a></li>
                                <li><a href=\"{{ path('inscrip_affich_all')}}\">Consulter les inscriptions </a></li>
                                <li><a href=\"{{ path('formations_index_all')}}\">Consulter toutes les formations</a></li>
                                <li><a href=\"{{ path('formations_nombres')}}\"> Listes des inscrits aux formations </a></li>

                            </ul>
                        </li>
                        <li class=\"menu-has-children\"><a href=\"\">Crowdfundings</a>
                            <ul>
                                <li><a href=\"{{ path('projet_new') }}\">Ajouter un projet</a></li>
                                <li><a href=\"{{ path('projet_index') }}\">Consulter vos projets</a></li>
                                <li><a href=\"{{ path('projet_indexall') }}\">Consulter toutes les projets</a></li>
                                <li><a href=\"{{ path('projet_show_invest') }}\">Consulter Mes Invesstissement</a></li>

                                <li><a href=\"{{ path('projet_index') }}\">Mes Projet Favorite Projet</a></li>
                            </ul>
                        </li>

                        <li class=\"menu-has-children\"><a href=\"\"><p>connected as : {{ app.user.username }}</p></a>
                            <ul>
                                <li><a href=\"{{ path('mon_profil') }}\">Mon Profil</a></li>
                                <li><a href=\"\">Mes Offres</a></li>
                                <li><a href=\"{{ path('formations_index')}}\">Mes Formations</a></li>
                                <li><a href={{ path('afficherInterview') }}>Mes Entretiens</a></li>
                                <li><a href=\"\">Mes Crowdfundings</a></li>
                                <li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
{% endblock %}

{% block banner %}
    <section class=\"banner-area relative\" id=\"home\">
        <div class=\"overlay overlay-bg\"></div>
        <div class=\"container\">
            <div class=\"row fullscreen d-flex align-items-center justify-content-center\">
                <div class=\"banner-content col-lg-12\">
                    <h1 class=\"text-white\">
                        <!--<span>1500+</span> Jobs posted last week -->
                    </h1>
                    <form action=\"search.html\" class=\"serach-form-area\">
                        <div class=\"row justify-content-center form-wrap\">
                            <div class=\"col-lg-4 form-cols\">
                                <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"what are you looging for?\">
                            </div>
                            <div class=\"col-lg-3 form-cols\">
                                <div class=\"default-select\" id=\"default-selects\">
                                    <select>
                                        <option value=\"1\">Select area</option>
                                        <option value=\"2\">Dhaka</option>
                                        <option value=\"3\">Rajshahi</option>
                                        <option value=\"4\">Barishal</option>
                                        <option value=\"5\">Noakhali</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-lg-3 form-cols\">
                                <div class=\"default-select\" id=\"default-selects2\">
                                    <select>
                                        <option value=\"1\">All Category</option>
                                        <option value=\"2\">Medical</option>
                                        <option value=\"3\">Technology</option>
                                        <option value=\"4\">Goverment</option>
                                        <option value=\"5\">Development</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-lg-2 form-cols\">
                                <button type=\"button\" class=\"btn btn-info\">
                                    <span class=\"lnr lnr-magnifier\"></span> Search
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--<p class=\"text-white\"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>-->
                </div>
            </div>
        </div>
    </section>
    <section class=\"features-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single-feature\">
                        <h4>Searching</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single-feature\">
                        <h4>Applying</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single-feature\">
                        <h4>Security</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single-feature\">
                        <h4>Notifications</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block content %}
    <section class=\"popular-post-area pt-100\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"active-popular-post-carusel\">
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img class=\"img-fluid\" src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End popular-post Area -->

    <section class=\"counter a\" style=\"margin-bottom: 100px; margin-top: 30px; background-color: #DA0833\">
        <div align=\"center\">
            <table class=\"t\">
                <tr>
                    <td>
                        <div class=\"container\">
                            <div>
                                <div class=\"counter-text\">

                                    <h3>1000</h3>
                                    <p>Jobs Posted</p>
                                </div>
                            </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>207</h3>
                                <p>All Companies</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>700+</h3>
                                <p>Total Members</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>802+</h3>
                                <p>Happy Members</p>
                            </div>
                        </div>
        </div>
        </td>
        </tr>
        </table>
        </div>
    </section>

    <!-- Start feature-cat Area -->

{% endblock %}
", "@User/Default/entreprisehome.html.twig", "C:\\wamp64\\www\\pidev2\\src\\UserBundle\\Resources\\views\\Default\\entreprisehome.html.twig");
    }
}
