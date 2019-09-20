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

      <div class=\"alert alert-success\">
          <strong>Fill in successs!!!!</strong> You can comback <a href=\"http://localhost:8000/customer/add\" class=\"alert-link\">form in order to add new customer</a>.
      </div>


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
        // line 53
        if ((twig_length_filter($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 53, $this->source); })())) > 0)) {
            // line 54
            echo "
              ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 55, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 56
                echo "
              <tr>
                  <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 58, $this->source); })()), $context["i"], [], "array", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                  <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 59, $this->source); })()), $context["i"], [], "array", false, false, false, 59), "mssv", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                  <td> <a href=\"http://localhost:8000/student/detail/";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 60, $this->source); })()), $context["i"], [], "array", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 60, $this->source); })()), $context["i"], [], "array", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
                echo "  </a></td>
                  <td class=\"text-center\"><a class='btn btn-info btn-xs' href=\"http://localhost:8000/student/edit/";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 61, $this->source); })()), $context["i"], [], "array", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Edit</a> <a href=\"http://localhost:8000/Student/delete/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 61, $this->source); })()), $context["i"], [], "array", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> Del</a></td>
              </tr>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "              ";
        }
        // line 66
        echo "

          </table>


          <div class=\"navigation\">
              ";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 72, $this->source); })()));
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
        return array (  147 => 72,  139 => 66,  136 => 65,  124 => 61,  118 => 60,  114 => 59,  110 => 58,  106 => 56,  102 => 55,  99 => 54,  97 => 53,  43 => 1,);
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

      <div class=\"alert alert-success\">
          <strong>Fill in successs!!!!</strong> You can comback <a href=\"http://localhost:8000/customer/add\" class=\"alert-link\">form in order to add new customer</a>.
      </div>


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
