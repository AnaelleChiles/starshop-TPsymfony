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
class __TwigTemplate_cc916178f294727c45a1490dcf2161df extends Template
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
    ";
        // line 7
        echo twig_include($this->env, $context, "main/_shipStatusAside.html.twig");
        echo "
        
        <div class=\"px-12 pt-10 w-full\">
            <h1 class=\"text-4xl font-semibold mb-8\">
                Ship Repair Queue
            </h1>

            <div class=\"space-y-5\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 16
            echo "                    <div class=\"bg-[#16202A] rounded-2xl pl-5 py-5 pr-11 flex flex-col min-[1174px]:flex-row min-[1174px]:justify-between\">
                        <div class=\"flex justify-center min-[1174px]:justify-start\">
                            <img class=\"h-[83px] w-[84px]\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["ship"], "StatusImageFilename", [], "any", false, false, false, 18)), "html", null, true);
            echo " \" alt=\"Status: in progress\">
                            <div class=\"ml-5\">
                                <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center bg-amber-400/10\">
                                    <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                                    <p class=\"uppercase text-xs text-nowrap\" alt=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ship"], "status", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "statusString", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                                </div>
                                <h4 class=\"text-[22px] pt-1 font-semibold\">
                                    <a
                                        class=\"hover:text-slate-200\"
                                        href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_starship_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"
                                    >";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</a>
                                </h4>
                            </div>
                        </div>
                        <div class=\"flex justify-center min-[1174px]:justify-start mt-2 min-[1174px]:mt-0 shrink-0\">
                            <div class=\"border-r border-white/20 pr-8\">
                                <p class=\"text-slate-400 text-xs\">Captain</p>
                                <p class=\"text-xl\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "captain", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                            </div>

                            <div class=\"pl-8 w-[100px]\">
                                <p class=\"text-slate-400 text-xs\">Class</p>
                                <p class=\"text-xl\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "class", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </div>

            <p class=\"text-lg mt-5 text-center md:text-left\">
                Looking for your next galactic ride?
                <a href=\"#\" class=\"underline font-semibold\">Browse the ";
        // line 49
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 49, $this->source); })())) * 10), "html", null, true);
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
        return array (  166 => 49,  160 => 45,  149 => 40,  141 => 35,  131 => 28,  127 => 27,  117 => 22,  110 => 18,  106 => 16,  102 => 15,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Starshop: Beam up some parts!{% endblock %}

{% block body %}
    <main class=\"flex flex-col lg:flex-row\">
    {{ include('main/_shipStatusAside.html.twig') }}
        
        <div class=\"px-12 pt-10 w-full\">
            <h1 class=\"text-4xl font-semibold mb-8\">
                Ship Repair Queue
            </h1>

            <div class=\"space-y-5\">
                {% for ship in ships %}
                    <div class=\"bg-[#16202A] rounded-2xl pl-5 py-5 pr-11 flex flex-col min-[1174px]:flex-row min-[1174px]:justify-between\">
                        <div class=\"flex justify-center min-[1174px]:justify-start\">
                            <img class=\"h-[83px] w-[84px]\" src=\"{{ asset(ship.StatusImageFilename) }} \" alt=\"Status: in progress\">
                            <div class=\"ml-5\">
                                <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center bg-amber-400/10\">
                                    <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                                    <p class=\"uppercase text-xs text-nowrap\" alt=\"{{ship.status.value}}\"> {{  ship.statusString }}</p>
                                </div>
                                <h4 class=\"text-[22px] pt-1 font-semibold\">
                                    <a
                                        class=\"hover:text-slate-200\"
                                        href=\"{{ path('app_starship_show', { id: ship.id }) }}\"
                                    >{{ ship.name }}</a>
                                </h4>
                            </div>
                        </div>
                        <div class=\"flex justify-center min-[1174px]:justify-start mt-2 min-[1174px]:mt-0 shrink-0\">
                            <div class=\"border-r border-white/20 pr-8\">
                                <p class=\"text-slate-400 text-xs\">Captain</p>
                                <p class=\"text-xl\">{{ ship.captain }}</p>
                            </div>

                            <div class=\"pl-8 w-[100px]\">
                                <p class=\"text-slate-400 text-xs\">Class</p>
                                <p class=\"text-xl\">{{ ship.class }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
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
