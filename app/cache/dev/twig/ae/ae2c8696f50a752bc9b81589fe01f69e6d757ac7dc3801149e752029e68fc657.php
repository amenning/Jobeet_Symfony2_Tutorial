<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_88349db668e388d6c9dd7e53547deff5dd8050bfe6a077731af95861e90bf002 extends Twig_Template
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
        $__internal_a583c22f8ee878fc2431f59ca52f43ff1c2d603606ac5eca3be43eb5fd8ec01e = $this->env->getExtension("native_profiler");
        $__internal_a583c22f8ee878fc2431f59ca52f43ff1c2d603606ac5eca3be43eb5fd8ec01e->enter($__internal_a583c22f8ee878fc2431f59ca52f43ff1c2d603606ac5eca3be43eb5fd8ec01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_a583c22f8ee878fc2431f59ca52f43ff1c2d603606ac5eca3be43eb5fd8ec01e->leave($__internal_a583c22f8ee878fc2431f59ca52f43ff1c2d603606ac5eca3be43eb5fd8ec01e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
