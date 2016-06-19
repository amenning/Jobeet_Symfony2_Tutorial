<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d1909b3fc7ef85bec1e953ccf9bb048420e0abb4a5862ee3f3436e4334b113cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d499fe30bee9e1d9dc43b7a74ddb22ef25291cc3b2916817112368bc5b0cad21 = $this->env->getExtension("native_profiler");
        $__internal_d499fe30bee9e1d9dc43b7a74ddb22ef25291cc3b2916817112368bc5b0cad21->enter($__internal_d499fe30bee9e1d9dc43b7a74ddb22ef25291cc3b2916817112368bc5b0cad21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d499fe30bee9e1d9dc43b7a74ddb22ef25291cc3b2916817112368bc5b0cad21->leave($__internal_d499fe30bee9e1d9dc43b7a74ddb22ef25291cc3b2916817112368bc5b0cad21_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
