<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c87de4d8e6686f86cac93fe8d9df598dd57998ab64a5ca48666e5cef81b22526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_76b1f652416f66e3684bfddba1ab72296cff2ce303038121021907d9df5f9e5c = $this->env->getExtension("native_profiler");
        $__internal_76b1f652416f66e3684bfddba1ab72296cff2ce303038121021907d9df5f9e5c->enter($__internal_76b1f652416f66e3684bfddba1ab72296cff2ce303038121021907d9df5f9e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b1f652416f66e3684bfddba1ab72296cff2ce303038121021907d9df5f9e5c->leave($__internal_76b1f652416f66e3684bfddba1ab72296cff2ce303038121021907d9df5f9e5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7607d865c25450ee5df90559dcd3a816646de78be3557122d833c3a1b35f8b5 = $this->env->getExtension("native_profiler");
        $__internal_b7607d865c25450ee5df90559dcd3a816646de78be3557122d833c3a1b35f8b5->enter($__internal_b7607d865c25450ee5df90559dcd3a816646de78be3557122d833c3a1b35f8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b7607d865c25450ee5df90559dcd3a816646de78be3557122d833c3a1b35f8b5->leave($__internal_b7607d865c25450ee5df90559dcd3a816646de78be3557122d833c3a1b35f8b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_47eba00d14317a9d8f0ec800a5a2697e49837cc45c53253f7b232a6ecea130fc = $this->env->getExtension("native_profiler");
        $__internal_47eba00d14317a9d8f0ec800a5a2697e49837cc45c53253f7b232a6ecea130fc->enter($__internal_47eba00d14317a9d8f0ec800a5a2697e49837cc45c53253f7b232a6ecea130fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47eba00d14317a9d8f0ec800a5a2697e49837cc45c53253f7b232a6ecea130fc->leave($__internal_47eba00d14317a9d8f0ec800a5a2697e49837cc45c53253f7b232a6ecea130fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
