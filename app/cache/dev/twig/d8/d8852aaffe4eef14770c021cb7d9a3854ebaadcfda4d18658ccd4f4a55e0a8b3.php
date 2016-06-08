<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_79e0ae89bd2a74e65a21829a77e371eb1fdb0b7b94ec0087fc9e4f557bc5f4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6660553a58a5a1a8d3b1006cea9b3ac5acb1867d0cd2ef37890d2d9d96d10be2 = $this->env->getExtension("native_profiler");
        $__internal_6660553a58a5a1a8d3b1006cea9b3ac5acb1867d0cd2ef37890d2d9d96d10be2->enter($__internal_6660553a58a5a1a8d3b1006cea9b3ac5acb1867d0cd2ef37890d2d9d96d10be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6660553a58a5a1a8d3b1006cea9b3ac5acb1867d0cd2ef37890d2d9d96d10be2->leave($__internal_6660553a58a5a1a8d3b1006cea9b3ac5acb1867d0cd2ef37890d2d9d96d10be2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aca8212086f58cd3a1b89f8ca21354ca302a8981944ae19f4620e991fec70fc9 = $this->env->getExtension("native_profiler");
        $__internal_aca8212086f58cd3a1b89f8ca21354ca302a8981944ae19f4620e991fec70fc9->enter($__internal_aca8212086f58cd3a1b89f8ca21354ca302a8981944ae19f4620e991fec70fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_aca8212086f58cd3a1b89f8ca21354ca302a8981944ae19f4620e991fec70fc9->leave($__internal_aca8212086f58cd3a1b89f8ca21354ca302a8981944ae19f4620e991fec70fc9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_13dac2d966a08edadf41602845c473621560d91ba790278ff5e668e6fbf21b15 = $this->env->getExtension("native_profiler");
        $__internal_13dac2d966a08edadf41602845c473621560d91ba790278ff5e668e6fbf21b15->enter($__internal_13dac2d966a08edadf41602845c473621560d91ba790278ff5e668e6fbf21b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_13dac2d966a08edadf41602845c473621560d91ba790278ff5e668e6fbf21b15->leave($__internal_13dac2d966a08edadf41602845c473621560d91ba790278ff5e668e6fbf21b15_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
