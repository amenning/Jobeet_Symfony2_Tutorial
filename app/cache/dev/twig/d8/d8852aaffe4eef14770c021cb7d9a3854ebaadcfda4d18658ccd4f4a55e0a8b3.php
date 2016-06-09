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
        $__internal_03040a51dc639e7a5935d685d74a04784b88aa2cb5b5016ed5fd3fc817bc4676 = $this->env->getExtension("native_profiler");
        $__internal_03040a51dc639e7a5935d685d74a04784b88aa2cb5b5016ed5fd3fc817bc4676->enter($__internal_03040a51dc639e7a5935d685d74a04784b88aa2cb5b5016ed5fd3fc817bc4676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03040a51dc639e7a5935d685d74a04784b88aa2cb5b5016ed5fd3fc817bc4676->leave($__internal_03040a51dc639e7a5935d685d74a04784b88aa2cb5b5016ed5fd3fc817bc4676_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b28336e65e4a7037f489b60f4d11c8bcd79de165ebfa51876a077146439322c0 = $this->env->getExtension("native_profiler");
        $__internal_b28336e65e4a7037f489b60f4d11c8bcd79de165ebfa51876a077146439322c0->enter($__internal_b28336e65e4a7037f489b60f4d11c8bcd79de165ebfa51876a077146439322c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b28336e65e4a7037f489b60f4d11c8bcd79de165ebfa51876a077146439322c0->leave($__internal_b28336e65e4a7037f489b60f4d11c8bcd79de165ebfa51876a077146439322c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78f41e445259241024ca44522cd350beef8464e03e7e406bd0f3d0fd51825fe6 = $this->env->getExtension("native_profiler");
        $__internal_78f41e445259241024ca44522cd350beef8464e03e7e406bd0f3d0fd51825fe6->enter($__internal_78f41e445259241024ca44522cd350beef8464e03e7e406bd0f3d0fd51825fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_78f41e445259241024ca44522cd350beef8464e03e7e406bd0f3d0fd51825fe6->leave($__internal_78f41e445259241024ca44522cd350beef8464e03e7e406bd0f3d0fd51825fe6_prof);

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
