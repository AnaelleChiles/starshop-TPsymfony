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
class __TwigTemplate_d453909e5bd88fdc1f43ca7cc4cfabe4 extends Template
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

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ShipShop
";
        
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
        echo "<h1><strong>Hello World !</strong></h1>
<p> Nombre de ships : ";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 7, $this->source); })())), "html", null, true);
        echo " </p>
";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 8, $this->source); })())) > 400)) {
            // line 9
            echo "    <p>
        C'est beaucoup de ships!!!!
    </p>
";
        }
        // line 13
        echo "<div>
    <table>
        <tr>
            <th> Id</th>
            <td> 
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_starship_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo " \">
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "
                </a>
            </td>
        </tr>
        <tr>
            <th> Name</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25)), "html", null, true);
        echo "</td>
        </tr>
    </table>
</div>
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
        return array (  127 => 25,  118 => 19,  114 => 18,  107 => 13,  101 => 9,  99 => 8,  95 => 7,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}
{% block title %}
    {{ parent() }} ShipShop
{% endblock %}
{% block body %}
<h1><strong>Hello World !</strong></h1>
<p> Nombre de ships : {{ships|length}} </p>
{% if ships|length > 400 %}
    <p>
        C'est beaucoup de ships!!!!
    </p>
{% endif %}
<div>
    <table>
        <tr>
            <th> Id</th>
            <td> 
                <a href=\"{{ path('app_starship_show', { id: myShip.id }) }} \">
                    {{myShip.id}}
                </a>
            </td>
        </tr>
        <tr>
            <th> Name</th>
            <td>{{myShip.name|upper}}</td>
        </tr>
    </table>
</div>
{% endblock %} ", "main/homepage.html.twig", "C:\\Users\\ac606785\\Desktop\\starshop-TPsymfony\\templates\\main\\homepage.html.twig");
    }
}
