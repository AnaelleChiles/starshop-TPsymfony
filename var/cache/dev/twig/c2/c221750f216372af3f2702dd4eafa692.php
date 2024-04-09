<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/homepage.html.twig */
class __TwigTemplate_a7c695776b8c53a0daf91561e4c1a00c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Starshop: Beam up some parts!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <main class=\"flex flex-col lg:flex-row\">
        <aside
            class=\"pb-8 lg:pb-0 lg:w-[411px] shrink-0 lg:block lg:min-h-screen text-white transition-all overflow-hidden px-8 border-b lg:border-b-0 lg:border-r border-white/20\"
        >
            <div class=\"flex justify-between mt-11 mb-7\">
                <h2 class=\"text-[32px] font-semibold\">My Ship Status</h2>
                <button>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 448 512\"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc.--><path fill=\"#fff\" d=\"M384 96c0-17.7 14.3-32 32-32s32 14.3 32 32V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V96zM9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3L109.3 224 288 224c17.7 0 32 14.3 32 32s-14.3 32-32 32l-178.7 0 73.4 73.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0l-128-128z\"/></svg>
                </button>
            </div>

            <div>
                <div class=\"flex flex-col space-y-1.5\">
                    <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center\" style=\"background: rgba(255, 184, 0, .1);\">
                        <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                        <p class=\"uppercase text-xs\">in progress</p>
                    </div>
                    <h3 class=\"tracking-tight text-[22px] font-semibold\">
                        <a class=\"hover:underline\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_starship_show", ["id" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        // line 26
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</a>
                    </h3>
                </div>
                <div class=\"flex mt-4\">
                    <div class=\"border-r border-white/20 pr-8\">
                        <p class=\"text-slate-400 text-xs\">Captain</p>
                        <p class=\"text-xl\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 32, $this->source); })()), "captain", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"pl-8\">
                        <p class=\"text-slate-400 text-xs\">Class</p>
                        <p class=\"text-xl\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 37, $this->source); })()), "class", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        </aside>

        <div class=\"px-12 pt-10 w-full\">
            <h1 class=\"text-4xl font-semibold mb-8\">
                Ship Repair Queue
            </h1>

            <div class=\"space-y-5\">
                <!-- start ship item -->
                    <div class=\"bg-[#16202A] rounded-2xl pl-5 py-5 pr-11 flex flex-col min-[1174px]:flex-row min-[1174px]:justify-between\">
                        <div class=\"flex justify-center min-[1174px]:justify-start\">
                            <img class=\"h-[83px] w-[84px]\" src=\"/images/status-in-progress.png\" alt=\"Status: in progress\">
                            <div class=\"ml-5\">
                                <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center bg-amber-400/10\">
                                    <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                                    <p class=\"uppercase text-xs text-nowrap\">in progress</p>
                                </div>
                                <h4 class=\"text-[22px] pt-1 font-semibold\">
                                    <a
                                        class=\"hover:text-slate-200\"
                                        href=\"#\"
                                    >USS LeafyCruiser</a>
                                </h4>
                            </div>
                        </div>
                        <div class=\"flex justify-center min-[1174px]:justify-start mt-2 min-[1174px]:mt-0 shrink-0\">
                            <div class=\"border-r border-white/20 pr-8\">
                                <p class=\"text-slate-400 text-xs\">Captain</p>
                                <p class=\"text-xl\">Jean-Luc Pickles</p>
                            </div>

                            <div class=\"pl-8 w-[100px]\">
                                <p class=\"text-slate-400 text-xs\">Class</p>
                                <p class=\"text-xl\">Garden</p>
                            </div>
                        </div>
                    </div>
                <!-- end ship item -->
            </div>

            <p class=\"text-lg mt-5 text-center md:text-left\">
                Looking for your next galactic ride?
                <a href=\"#\" class=\"underline font-semibold\">Browse the ";
        // line 83
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 83, $this->source); })())) * 10), "html", null, true);
        echo " starships for sale!</a>
            </p>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  178 => 83,  129 => 37,  121 => 32,  111 => 26,  109 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Starshop: Beam up some parts!{% endblock %}

{% block body %}
    <main class=\"flex flex-col lg:flex-row\">
        <aside
            class=\"pb-8 lg:pb-0 lg:w-[411px] shrink-0 lg:block lg:min-h-screen text-white transition-all overflow-hidden px-8 border-b lg:border-b-0 lg:border-r border-white/20\"
        >
            <div class=\"flex justify-between mt-11 mb-7\">
                <h2 class=\"text-[32px] font-semibold\">My Ship Status</h2>
                <button>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 448 512\"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc.--><path fill=\"#fff\" d=\"M384 96c0-17.7 14.3-32 32-32s32 14.3 32 32V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V96zM9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3L109.3 224 288 224c17.7 0 32 14.3 32 32s-14.3 32-32 32l-178.7 0 73.4 73.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0l-128-128z\"/></svg>
                </button>
            </div>

            <div>
                <div class=\"flex flex-col space-y-1.5\">
                    <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center\" style=\"background: rgba(255, 184, 0, .1);\">
                        <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                        <p class=\"uppercase text-xs\">in progress</p>
                    </div>
                    <h3 class=\"tracking-tight text-[22px] font-semibold\">
                        <a class=\"hover:underline\" href=\"{{ path('app_starship_show', {
                            id: myShip.id
                        }) }}\">{{ myShip.name }}</a>
                    </h3>
                </div>
                <div class=\"flex mt-4\">
                    <div class=\"border-r border-white/20 pr-8\">
                        <p class=\"text-slate-400 text-xs\">Captain</p>
                        <p class=\"text-xl\">{{ myShip.captain }}</p>
                    </div>

                    <div class=\"pl-8\">
                        <p class=\"text-slate-400 text-xs\">Class</p>
                        <p class=\"text-xl\">{{ myShip.class }}</p>
                    </div>
                </div>
            </div>
        </aside>

        <div class=\"px-12 pt-10 w-full\">
            <h1 class=\"text-4xl font-semibold mb-8\">
                Ship Repair Queue
            </h1>

            <div class=\"space-y-5\">
                <!-- start ship item -->
                    <div class=\"bg-[#16202A] rounded-2xl pl-5 py-5 pr-11 flex flex-col min-[1174px]:flex-row min-[1174px]:justify-between\">
                        <div class=\"flex justify-center min-[1174px]:justify-start\">
                            <img class=\"h-[83px] w-[84px]\" src=\"/images/status-in-progress.png\" alt=\"Status: in progress\">
                            <div class=\"ml-5\">
                                <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center bg-amber-400/10\">
                                    <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                                    <p class=\"uppercase text-xs text-nowrap\">in progress</p>
                                </div>
                                <h4 class=\"text-[22px] pt-1 font-semibold\">
                                    <a
                                        class=\"hover:text-slate-200\"
                                        href=\"#\"
                                    >USS LeafyCruiser</a>
                                </h4>
                            </div>
                        </div>
                        <div class=\"flex justify-center min-[1174px]:justify-start mt-2 min-[1174px]:mt-0 shrink-0\">
                            <div class=\"border-r border-white/20 pr-8\">
                                <p class=\"text-slate-400 text-xs\">Captain</p>
                                <p class=\"text-xl\">Jean-Luc Pickles</p>
                            </div>

                            <div class=\"pl-8 w-[100px]\">
                                <p class=\"text-slate-400 text-xs\">Class</p>
                                <p class=\"text-xl\">Garden</p>
                            </div>
                        </div>
                    </div>
                <!-- end ship item -->
            </div>

            <p class=\"text-lg mt-5 text-center md:text-left\">
                Looking for your next galactic ride?
                <a href=\"#\" class=\"underline font-semibold\">Browse the {{ ships|length * 10 }} starships for sale!</a>
            </p>
        </div>
    </main>
{% endblock %}
", "main/homepage.html.twig", "C:\\Users\\ac606785\\Desktop\\starshop-TPsymfony\\templates\\main\\homepage.html.twig");
    }
}
