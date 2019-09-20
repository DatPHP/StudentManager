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

/* student/index.html.twig */
class __TwigTemplate_7cb476ccf2d878859d6b700042093b79f6bbfe2c640699b83b687a9c38eebfac extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Customer | Information</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

</head>
<body>
  <style>
      .btn-product{
          width: 100%;
      }

      .custab{
          border: 1px solid #ccc;
          padding: 5px;
          margin: 5% 0;
          box-shadow: 3px 3px 2px #ccc;
          transition: 0.5s;
      }
      .custab:hover{
          box-shadow: 3px 3px 0px transparent;
          transition: 0.5s;
      }
  </style>

  <div class=\"container\">

      ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "session", [], "any", false, false, false, 34), "flashbag", [], "any", false, false, false, 34), "get", [0 => "notice"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["mess"]) {
            // line 35
            echo "          <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["mess"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
      ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "session", [], "any", false, false, false, 38), "flashbag", [], "any", false, false, false, 38), "get", [0 => "update"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["mess"]) {
            // line 39
            echo "          <div class=\"alert alert-primary\">";
            echo twig_escape_filter($this->env, $context["mess"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "session", [], "any", false, false, false, 41), "flashbag", [], "any", false, false, false, 41), "get", [0 => "add"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["mess"]) {
            // line 42
            echo "          <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["mess"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "


      <hr>

      <div class=\"row col-md-6 col-md-offset-2 custyle\">
          <table class=\"table table-striped custab\">
              <thead>
              <a href=\"http://localhost:8000/student/add\" class=\"btn btn-primary btn-xs pull-right\"><b>+</b> Add new categories</a>
              <tr>
                  <th>ID</th>
                  <th>MSSV</th>
                  <th>Name</th>
                  <th class=\"text-center\">Action</th>
              </tr>
              </thead>

              ";
        // line 61
        if ((twig_length_filter($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 61, $this->source); })())) > 0)) {
            // line 62
            echo "
              ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 63, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 64
                echo "
              <tr>
                  <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 66, $this->source); })()), $context["i"], [], "array", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                  <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 67, $this->source); })()), $context["i"], [], "array", false, false, false, 67), "mssv", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                  <td> <a href=\"http://localhost:8000/student/detail/";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 68, $this->source); })()), $context["i"], [], "array", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 68, $this->source); })()), $context["i"], [], "array", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
                echo "  </a></td>
                  <td class=\"text-center\"><a class='btn btn-info btn-xs' href=\"http://localhost:8000/student/edit/";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 69, $this->source); })()), $context["i"], [], "array", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Edit</a> <a href=\"http://localhost:8000/Student/delete/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 69, $this->source); })()), $context["i"], [], "array", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> Del</a></td>
              </tr>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "              ";
        }
        // line 74
        echo "

          </table>


          <div class=\"navigation\">
              ";
        // line 80
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 80, $this->source); })()));
        echo "
          </div>




      </div>
  </div>


















";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 80,  182 => 74,  179 => 73,  167 => 69,  161 => 68,  157 => 67,  153 => 66,  149 => 64,  145 => 63,  142 => 62,  140 => 61,  121 => 44,  112 => 42,  107 => 41,  98 => 39,  94 => 38,  91 => 37,  82 => 35,  78 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Customer | Information</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

</head>
<body>
  <style>
      .btn-product{
          width: 100%;
      }

      .custab{
          border: 1px solid #ccc;
          padding: 5px;
          margin: 5% 0;
          box-shadow: 3px 3px 2px #ccc;
          transition: 0.5s;
      }
      .custab:hover{
          box-shadow: 3px 3px 0px transparent;
          transition: 0.5s;
      }
  </style>

  <div class=\"container\">

      {% for mess in app.session.flashbag.get('notice') %}
          <div class=\"alert alert-warning\">{{ mess }}</div>
      {% endfor %}

      {% for mess in app.session.flashbag.get('update') %}
          <div class=\"alert alert-primary\">{{ mess }}</div>
      {% endfor %}
      {% for mess in app.session.flashbag.get('add') %}
          <div class=\"alert alert-info\">{{ mess }}</div>
      {% endfor %}



      <hr>

      <div class=\"row col-md-6 col-md-offset-2 custyle\">
          <table class=\"table table-striped custab\">
              <thead>
              <a href=\"http://localhost:8000/student/add\" class=\"btn btn-primary btn-xs pull-right\"><b>+</b> Add new categories</a>
              <tr>
                  <th>ID</th>
                  <th>MSSV</th>
                  <th>Name</th>
                  <th class=\"text-center\">Action</th>
              </tr>
              </thead>

              {% if appointments|length > 0 %}

              {% for i in range(0, (appointments|length - 1)) %}

              <tr>
                  <td>{{ appointments[i].id }}</td>
                  <td>{{ appointments[i].mssv }}</td>
                  <td> <a href=\"http://localhost:8000/student/detail/{{ appointments[i].id }}\"> {{ appointments[i].name }}  </a></td>
                  <td class=\"text-center\"><a class='btn btn-info btn-xs' href=\"http://localhost:8000/student/edit/{{ appointments[i].id }}\"><span class=\"glyphicon glyphicon-edit\"></span> Edit</a> <a href=\"http://localhost:8000/Student/delete/{{ appointments[i].id }}\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> Del</a></td>
              </tr>

              {% endfor %}
              {% endif %}


          </table>


          <div class=\"navigation\">
              {{ knp_pagination_render(appointments) }}
          </div>




      </div>
  </div>


















", "student/index.html.twig", "/home/dat96/symfonyBasic/templates/student/index.html.twig");
    }
}
