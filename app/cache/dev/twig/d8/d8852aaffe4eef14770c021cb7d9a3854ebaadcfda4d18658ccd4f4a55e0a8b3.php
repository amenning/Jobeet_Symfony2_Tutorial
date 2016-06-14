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
        $__internal_1d9f78458f6ac1677f332a322011b6b32119686454fb7d174b010403ab834b48 = $this->env->getExtension("native_profiler");
        $__internal_1d9f78458f6ac1677f332a322011b6b32119686454fb7d174b010403ab834b48->enter($__internal_1d9f78458f6ac1677f332a322011b6b32119686454fb7d174b010403ab834b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d9f78458f6ac1677f332a322011b6b32119686454fb7d174b010403ab834b48->leave($__internal_1d9f78458f6ac1677f332a322011b6b32119686454fb7d174b010403ab834b48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3678f850cb4618f5d92a5fd5bfa3cafd05805fdada33708db4969fe016580c9c = $this->env->getExtension("native_profiler");
        $__internal_3678f850cb4618f5d92a5fd5bfa3cafd05805fdada33708db4969fe016580c9c->enter($__internal_3678f850cb4618f5d92a5fd5bfa3cafd05805fdada33708db4969fe016580c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3678f850cb4618f5d92a5fd5bfa3cafd05805fdada33708db4969fe016580c9c->leave($__internal_3678f850cb4618f5d92a5fd5bfa3cafd05805fdada33708db4969fe016580c9c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ac1ee6572ea843b8d186d2e550317e4efbc7fb9436b24268b0ef45c0ed9860e = $this->env->getExtension("native_profiler");
        $__internal_2ac1ee6572ea843b8d186d2e550317e4efbc7fb9436b24268b0ef45c0ed9860e->enter($__internal_2ac1ee6572ea843b8d186d2e550317e4efbc7fb9436b24268b0ef45c0ed9860e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2ac1ee6572ea843b8d186d2e550317e4efbc7fb9436b24268b0ef45c0ed9860e->leave($__internal_2ac1ee6572ea843b8d186d2e550317e4efbc7fb9436b24268b0ef45c0ed9860e_prof);

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
