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
        $__internal_6df511489713dc6bd2498ba0461b6fabc898202e6ea5a5aed74f9b0566e92b95 = $this->env->getExtension("native_profiler");
        $__internal_6df511489713dc6bd2498ba0461b6fabc898202e6ea5a5aed74f9b0566e92b95->enter($__internal_6df511489713dc6bd2498ba0461b6fabc898202e6ea5a5aed74f9b0566e92b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6df511489713dc6bd2498ba0461b6fabc898202e6ea5a5aed74f9b0566e92b95->leave($__internal_6df511489713dc6bd2498ba0461b6fabc898202e6ea5a5aed74f9b0566e92b95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_795bb21d4ef80e72f0c5767400d98d913e6f9c3558187f1eec3a015f8f2fba61 = $this->env->getExtension("native_profiler");
        $__internal_795bb21d4ef80e72f0c5767400d98d913e6f9c3558187f1eec3a015f8f2fba61->enter($__internal_795bb21d4ef80e72f0c5767400d98d913e6f9c3558187f1eec3a015f8f2fba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_795bb21d4ef80e72f0c5767400d98d913e6f9c3558187f1eec3a015f8f2fba61->leave($__internal_795bb21d4ef80e72f0c5767400d98d913e6f9c3558187f1eec3a015f8f2fba61_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_56d8b67a7ff37e7f5d8b3ac290873c66825487f92b268d93d788f8d12331271c = $this->env->getExtension("native_profiler");
        $__internal_56d8b67a7ff37e7f5d8b3ac290873c66825487f92b268d93d788f8d12331271c->enter($__internal_56d8b67a7ff37e7f5d8b3ac290873c66825487f92b268d93d788f8d12331271c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_56d8b67a7ff37e7f5d8b3ac290873c66825487f92b268d93d788f8d12331271c->leave($__internal_56d8b67a7ff37e7f5d8b3ac290873c66825487f92b268d93d788f8d12331271c_prof);

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
