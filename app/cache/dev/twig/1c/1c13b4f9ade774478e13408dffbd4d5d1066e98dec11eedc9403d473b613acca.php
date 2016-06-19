<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7b2fac19d7fe51da01dd02ce1174ecbc84d4d2292dc1ec8e5644eca9ffa489e4 extends Twig_Template
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
        $__internal_337cfdf8751c25259a3314f40b2737c393715429b791d13fead6f75dcbf0a9e0 = $this->env->getExtension("native_profiler");
        $__internal_337cfdf8751c25259a3314f40b2737c393715429b791d13fead6f75dcbf0a9e0->enter($__internal_337cfdf8751c25259a3314f40b2737c393715429b791d13fead6f75dcbf0a9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337cfdf8751c25259a3314f40b2737c393715429b791d13fead6f75dcbf0a9e0->leave($__internal_337cfdf8751c25259a3314f40b2737c393715429b791d13fead6f75dcbf0a9e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dae386a1bdc13c7249779ea6e454b917b7e2f3494977773563d33ce844186f36 = $this->env->getExtension("native_profiler");
        $__internal_dae386a1bdc13c7249779ea6e454b917b7e2f3494977773563d33ce844186f36->enter($__internal_dae386a1bdc13c7249779ea6e454b917b7e2f3494977773563d33ce844186f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dae386a1bdc13c7249779ea6e454b917b7e2f3494977773563d33ce844186f36->leave($__internal_dae386a1bdc13c7249779ea6e454b917b7e2f3494977773563d33ce844186f36_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_219f56575be61ab614636fe22c5258a19f3151c88f996542bdf230b46cf3375f = $this->env->getExtension("native_profiler");
        $__internal_219f56575be61ab614636fe22c5258a19f3151c88f996542bdf230b46cf3375f->enter($__internal_219f56575be61ab614636fe22c5258a19f3151c88f996542bdf230b46cf3375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_219f56575be61ab614636fe22c5258a19f3151c88f996542bdf230b46cf3375f->leave($__internal_219f56575be61ab614636fe22c5258a19f3151c88f996542bdf230b46cf3375f_prof);

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
