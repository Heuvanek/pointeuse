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

/* listing_client/listingMission.html.twig */
class __TwigTemplate_04af1fd05c3ef9d43cdbd0b6c4f99898e3600bfb382a9782513ea1df87ac45cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listing_client/listingMission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listing_client/listingMission.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "listing_client/listingMission.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Liste Missions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"row\">
    <div class=\"col-12 pt-4\">
        <div class=\"table-responsive\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <h6>nom société</h6>
                </div>
                <div class=\"col-4\">
                    <h6>num société</h6>
                </div>
                <div class=\"col-4\">
                    <h6>mail société</h6>
                </div>
            </div>
            <table class=\"table table-striped table-dark\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom mission</th>
                        <th scope=\"col\">Chrono</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 32
            echo "                    <tr>
                        <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("listing_mission", ["id_client" => 1]);
            echo "\">
                            <th scope=\"row\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "titleMission", [], "any", false, false, false, 34), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "createdAt", [], "any", false, false, false, 34), "d-m-Y"), "html", null, true);
            echo "</th><a>
                                <td>
                                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "time", [], "any", false, false, false, 36), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <a class=\"btn btn-primary btn-sm\" href=\"\">
                                        ";
            // line 41
            echo "                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                </td>
                                <td>
                                    <form onsubmit=\"return confirm('sur ?');\" action=\"\" method=\"post\">
                                        ";
            // line 47
            echo "                                        <input type=\"hidden\" name=\"token\" value=\"\" />
                                        ";
            // line 49
            echo "                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-2\"></div>
    <div class=\"col-4\">
        <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("pointeuse");
        echo "\"><button type=\"button\"class=\"small text-btn btn-success btn-lg btn-block\">Ajouter une mission</button></a>
    </div>
    <div class=\"col-4\">
        <button type=\"button\" class=\"small btn btn-success btn-lg btn-block\">Imprimer la liste</button>
    </div>
    <div class=\"col-2\"></div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "listing_client/listingMission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 64,  163 => 56,  151 => 49,  148 => 47,  141 => 41,  134 => 36,  127 => 34,  123 => 33,  120 => 32,  116 => 31,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - Liste Missions{% endblock %}

{% block body %}

<div class=\"row\">
    <div class=\"col-12 pt-4\">
        <div class=\"table-responsive\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <h6>nom société</h6>
                </div>
                <div class=\"col-4\">
                    <h6>num société</h6>
                </div>
                <div class=\"col-4\">
                    <h6>mail société</h6>
                </div>
            </div>
            <table class=\"table table-striped table-dark\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom mission</th>
                        <th scope=\"col\">Chrono</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    {% for mission in missions %}
                    <tr>
                        <a href=\"{{ url('listing_mission',{id_client: 1}) }}\">
                            <th scope=\"row\">{{ mission.titleMission }}<br>{{ mission.createdAt| date('d-m-Y')}}</th><a>
                                <td>
                                    {{mission.time}}
                                </td>
                                <td>
                                    <a class=\"btn btn-primary btn-sm\" href=\"\">
                                        {# {{ path('post_edit',{id: post.id}) }} #}
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                </td>
                                <td>
                                    <form onsubmit=\"return confirm('sur ?');\" action=\"\" method=\"post\">
                                        {# {{ path('post_delete',{id: post.id}) }} #}
                                        <input type=\"hidden\" name=\"token\" value=\"\" />
                                        {# {{ csrf_token('delete-post') }} #}
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-2\"></div>
    <div class=\"col-4\">
        <a href=\"{{ url('pointeuse') }}\"><button type=\"button\"class=\"small text-btn btn-success btn-lg btn-block\">Ajouter une mission</button></a>
    </div>
    <div class=\"col-4\">
        <button type=\"button\" class=\"small btn btn-success btn-lg btn-block\">Imprimer la liste</button>
    </div>
    <div class=\"col-2\"></div>

</div>
{% endblock %}", "listing_client/listingMission.html.twig", "C:\\xampp\\htdocs\\pointeuse\\templates\\listing_client\\listingMission.html.twig");
    }
}
