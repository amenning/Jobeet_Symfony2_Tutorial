<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a53df92fd82faf3246feded0683c9fdcf3090a8ccf4caea1122ea06d2f1bf4cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f8eb4c58bc076119e6a9e7de6f5960c93f5fd1746ce6174c87cb4a5b4107e2c = $this->env->getExtension("native_profiler");
        $__internal_6f8eb4c58bc076119e6a9e7de6f5960c93f5fd1746ce6174c87cb4a5b4107e2c->enter($__internal_6f8eb4c58bc076119e6a9e7de6f5960c93f5fd1746ce6174c87cb4a5b4107e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f8eb4c58bc076119e6a9e7de6f5960c93f5fd1746ce6174c87cb4a5b4107e2c->leave($__internal_6f8eb4c58bc076119e6a9e7de6f5960c93f5fd1746ce6174c87cb4a5b4107e2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb82921a192bc237dde94f1d037ef872aaf518f3767de073b77fddef9f335957 = $this->env->getExtension("native_profiler");
        $__internal_fb82921a192bc237dde94f1d037ef872aaf518f3767de073b77fddef9f335957->enter($__internal_fb82921a192bc237dde94f1d037ef872aaf518f3767de073b77fddef9f335957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb82921a192bc237dde94f1d037ef872aaf518f3767de073b77fddef9f335957->leave($__internal_fb82921a192bc237dde94f1d037ef872aaf518f3767de073b77fddef9f335957_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e13dcaaea16fca9a20b635d8d74dc1218d531a6ff14b9cc253cafc3a83abba67 = $this->env->getExtension("native_profiler");
        $__internal_e13dcaaea16fca9a20b635d8d74dc1218d531a6ff14b9cc253cafc3a83abba67->enter($__internal_e13dcaaea16fca9a20b635d8d74dc1218d531a6ff14b9cc253cafc3a83abba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e13dcaaea16fca9a20b635d8d74dc1218d531a6ff14b9cc253cafc3a83abba67->leave($__internal_e13dcaaea16fca9a20b635d8d74dc1218d531a6ff14b9cc253cafc3a83abba67_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1145171c8c84f25c05559ff21f773417b5e379c23e4fed7b5ebc7a9c3eb77144 = $this->env->getExtension("native_profiler");
        $__internal_1145171c8c84f25c05559ff21f773417b5e379c23e4fed7b5ebc7a9c3eb77144->enter($__internal_1145171c8c84f25c05559ff21f773417b5e379c23e4fed7b5ebc7a9c3eb77144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1145171c8c84f25c05559ff21f773417b5e379c23e4fed7b5ebc7a9c3eb77144->leave($__internal_1145171c8c84f25c05559ff21f773417b5e379c23e4fed7b5ebc7a9c3eb77144_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
