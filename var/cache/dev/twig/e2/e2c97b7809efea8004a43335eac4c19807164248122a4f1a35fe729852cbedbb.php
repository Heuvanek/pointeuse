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

/* listing_client/index.html.twig */
class __TwigTemplate_f043d4927e01a668ef98afe1221fa058d796b76b3172b39f0dbb5d68fc7a10f4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listing_client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listing_client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "listing_client/index.html.twig", 1);
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
        echo " - Liste Clients";
        
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
      <table class=\"table table-striped table-dark\">
        <thead>
          <tr>
            <th scope=\"col\">Société</th>
            <th scope=\"col\">Profil</th>
            <th scope=\"col\">Edit</th>
            <th scope=\"col\">Delete</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 21
            echo "          <tr>
          ";
            // line 23
            echo "            <th scope=\"row\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("listing_mission", ["id_client" => 1]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "society", [], "any", false, false, false, 23), "html", null, true);
            echo " <br><small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "surname", [], "any", false, false, false, 23), "html", null, true);
            echo "</small><a></th>
            ";
            // line 25
            echo "            <td>               
<button type=\"submit\" class=\"btn btn-primary btn-sm\">
                  <i class=\"far fa-address-card\"></i>
            </button></td>
            ";
            // line 30
            echo "            <td>
              <a class=\"btn btn-primary btn-sm\" href=\"\">
                ";
            // line 33
            echo "                <i class=\"fas fa-edit\"></i>
              </a>
            </td>
            <td>
              <form onsubmit=\"return confirm('sur ?');\" action=\"\" method=\"post\">
                ";
            // line 39
            echo "                <input type=\"hidden\" name=\"token\" value=\"\" />
                ";
            // line 41
            echo "                <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                  <i class=\"fas fa-trash-alt\"></i>
                </button>
              </form>
            </td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
      </table>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "listing_client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 48,  143 => 41,  140 => 39,  133 => 33,  129 => 30,  123 => 25,  112 => 23,  109 => 21,  105 => 20,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - Liste Clients{% endblock %}

{% block body %}

<div class=\"row\">
  <div class=\"col-12 pt-4\">
    <div class=\"table-responsive\">
      <table class=\"table table-striped table-dark\">
        <thead>
          <tr>
            <th scope=\"col\">Société</th>
            <th scope=\"col\">Profil</th>
            <th scope=\"col\">Edit</th>
            <th scope=\"col\">Delete</th>
          </tr>
        </thead>
        <tbody>
          {% for client in clients %}
          <tr>
          {# {% set client.id = 1 %} #}
            <th scope=\"row\"><a href=\"{{ url('listing_mission',{id_client: 1}) }}\">{{ client.society }} <br><small>{{ client.name }} {{ client.surname }}</small><a></th>
            {# {{ post.id }} #}
            <td>               
<button type=\"submit\" class=\"btn btn-primary btn-sm\">
                  <i class=\"far fa-address-card\"></i>
            </button></td>
            {# {{ post.title }} #}
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
{% endblock %}
", "listing_client/index.html.twig", "C:\\xampp\\htdocs\\pointeuse\\templates\\listing_client\\index.html.twig");
    }
}
