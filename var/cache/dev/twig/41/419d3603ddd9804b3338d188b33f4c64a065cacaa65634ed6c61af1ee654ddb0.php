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

/* student/detail.html.twig */
class __TwigTemplate_771d3047e4ef3dec26f244e743c99d25d4009c9212101a6387979926dcc04315 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/detail.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Detail Information </title>

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">


</head>




<body>

<style>


    li {
        list-style: none;
    }
    .anidi_services {
        padding: 40px 20px 80px;
        border-radius: 6px;
        background-color: rgb(20, 110, 153);
    }
    .anidi_services ul {
        display: block;
    }

    .anidi_services ul li {
        display: block;
        margin-bottom: 15px;
        color: #fff;
        text-decoration: none;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    .anidi_services ul li a {
        display: block;
        color: #fff;
        text-decoration: none;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    .anidi_services ul li a span.icon {
        width: 50px;
        display: block;
        font-size: 30px;
        vertical-align: middle;
        float: left;
    }

    .anidi_services ul li a span.text {
        display: block;
        vertical-align: middle;
        font-size: 16px;
        margin-left: 50px;
        padding-top: 12px;
    }
</style>
<div class=\"container anidi_services \">
    <div class=\"row\">
        <ul class=\"links\">
            <li><a href=\"\" title=\"Food & Beverages\">
                    <span class=\"icon\"><i class=\"fa fa-circle \"></i></span>
                    <span class=\"text\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 87, $this->source); })()), "mssv", [], "any", false, false, false, 87), "html", null, true);
        echo "</span></a>
                <div class=\"clearfix\"></div>
            </li>
            <li><a href=\"\" title=\"Banking & Insurance apps\">
                    <span class=\"icon\"><i class=\"fa fa-user\"></i></span>
                    <span class=\"text\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92), "html", null, true);
        echo "</span></a>
                <div class=\"clearfix\"></div>
            </li>
            <li><a href=\"\" title=\"Banking & Insurance apps\">
                    <span class=\"icon\"><i class=\"fa fa-phone\"></i></span>
                    <span class=\"text\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 97, $this->source); })()), "phone", [], "any", false, false, false, 97), "html", null, true);
        echo "</span></a>
                <div class=\"clearfix\"></div>
            </li>
            <li><a href=\"\" title=\"Banking & Insurance apps\">
                    <span class=\"icon\"><i class=\"fa fa-envelope\"></i></span>
                    <span class=\"text\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 102, $this->source); })()), "email", [], "any", false, false, false, 102), "html", null, true);
        echo "</span></a>
                <div class=\"clearfix\"></div>
            </li>



            <li><a href=\"\" title=\"Banking & Insurance apps\">
                    <span class=\"icon\"><i class=\"fa fa-home \"></i></span>
                    <span class=\"text\">";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 110, $this->source); })()), "address", [], "any", false, false, false, 110), "html", null, true);
        echo "</span></a>
                <div class=\"clearfix\"></div>
            </li>

        </ul>
    </div>
</div>



</body>
</html>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 110,  155 => 102,  147 => 97,  139 => 92,  131 => 87,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Detail Information </title>

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">


</head>




<body>

<style>


    li {
        list-style: none;
    }
    .anidi_services {
        padding: 40px 20px 80px;
        border-radius: 6px;
        background-color: rgb(20, 110, 153);
    }
    .anidi_services ul {
        display: block;
    }

    .anidi_services ul li {
        display: block;
        margin-bottom: 15px;
        color: #fff;
        text-decoration: none;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    .anidi_services ul li a {
        display: block;
        color: #fff;
        text-decoration: none;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    .anidi_services ul li a span.icon {
        width: 50px;
        display: block;
        font-size: 30px;
        vertical-align: middle;
        float: left;
    }

    .anidi_services ul li a span.text {
        display: block;
        vertical-align: middle;
        font-size: 16px;
        margin-left: 50px;
        padding-top: 12px;
    }
</style>
<div class=\"container anidi_services \">
    <div class=\"row\">
        <ul class=\"links\">
            <li><a href=\"\" title=\"Food & Beverages\">
                    <span class=\"icon\"><i class=\"fa fa-circle \"></i></span>
                    <span class=\"text\">{{ student.mssv }}</span></a>
                <div class=\"clearfix\"></div>
            </li>
            <li><a href=\"\" title=\"Banking & Insurance apps\">
                    <span class=\"icon\"><i class=\"fa fa-user\"></i></span>
                    <span class=\"text\">{{ student.name }}</span></a>
                <div class=\"clearfix\"></div>
            </li>
            <li><a href=\"\" title=\"Banking & Insurance apps\">
                    <span class=\"icon\"><i class=\"fa fa-phone\"></i></span>
                    <span class=\"text\">{{ student.phone }}</span></a>
                <div class=\"clearfix\"></div>
            </li>
            <li><a href=\"\" title=\"Banking & Insurance apps\">
                    <span class=\"icon\"><i class=\"fa fa-envelope\"></i></span>
                    <span class=\"text\">{{ student.email }}</span></a>
                <div class=\"clearfix\"></div>
            </li>



            <li><a href=\"\" title=\"Banking & Insurance apps\">
                    <span class=\"icon\"><i class=\"fa fa-home \"></i></span>
                    <span class=\"text\">{{ student.address }}</span></a>
                <div class=\"clearfix\"></div>
            </li>

        </ul>
    </div>
</div>



</body>
</html>



", "student/detail.html.twig", "/home/dat96/symfonyBasic/templates/student/detail.html.twig");
    }
}
