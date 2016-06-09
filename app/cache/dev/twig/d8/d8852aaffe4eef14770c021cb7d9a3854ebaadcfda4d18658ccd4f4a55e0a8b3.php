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
        $__internal_71e7ab36ed8507ecf3d12919925220aca52ca822cc4f482dc2e5fc79048809cd = $this->env->getExtension("native_profiler");
        $__internal_71e7ab36ed8507ecf3d12919925220aca52ca822cc4f482dc2e5fc79048809cd->enter($__internal_71e7ab36ed8507ecf3d12919925220aca52ca822cc4f482dc2e5fc79048809cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e7ab36ed8507ecf3d12919925220aca52ca822cc4f482dc2e5fc79048809cd->leave($__internal_71e7ab36ed8507ecf3d12919925220aca52ca822cc4f482dc2e5fc79048809cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edd243dde42b5c531d3a3524e4e8cff075db9b38d070362c4abf1756af632a5a = $this->env->getExtension("native_profiler");
        $__internal_edd243dde42b5c531d3a3524e4e8cff075db9b38d070362c4abf1756af632a5a->enter($__internal_edd243dde42b5c531d3a3524e4e8cff075db9b38d070362c4abf1756af632a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_edd243dde42b5c531d3a3524e4e8cff075db9b38d070362c4abf1756af632a5a->leave($__internal_edd243dde42b5c531d3a3524e4e8cff075db9b38d070362c4abf1756af632a5a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4e04374340e0b29bd27fc3d54a5a252813d2e2e971c5e30e36cab935a0307d2 = $this->env->getExtension("native_profiler");
        $__internal_b4e04374340e0b29bd27fc3d54a5a252813d2e2e971c5e30e36cab935a0307d2->enter($__internal_b4e04374340e0b29bd27fc3d54a5a252813d2e2e971c5e30e36cab935a0307d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4e04374340e0b29bd27fc3d54a5a252813d2e2e971c5e30e36cab935a0307d2->leave($__internal_b4e04374340e0b29bd27fc3d54a5a252813d2e2e971c5e30e36cab935a0307d2_prof);

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
