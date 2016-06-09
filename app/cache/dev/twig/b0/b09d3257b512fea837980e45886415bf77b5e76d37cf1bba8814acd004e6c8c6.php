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
        $__internal_8a4ee0aa49fb9842232902b7ae7cf6d13e2bf537256e7c100c0b22fee84b5a6a = $this->env->getExtension("native_profiler");
        $__internal_8a4ee0aa49fb9842232902b7ae7cf6d13e2bf537256e7c100c0b22fee84b5a6a->enter($__internal_8a4ee0aa49fb9842232902b7ae7cf6d13e2bf537256e7c100c0b22fee84b5a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a4ee0aa49fb9842232902b7ae7cf6d13e2bf537256e7c100c0b22fee84b5a6a->leave($__internal_8a4ee0aa49fb9842232902b7ae7cf6d13e2bf537256e7c100c0b22fee84b5a6a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_25442cb38dc1c5d752369cc8da6d12e9b1a48f33bb98f7f1552e7f4c9d31fedd = $this->env->getExtension("native_profiler");
        $__internal_25442cb38dc1c5d752369cc8da6d12e9b1a48f33bb98f7f1552e7f4c9d31fedd->enter($__internal_25442cb38dc1c5d752369cc8da6d12e9b1a48f33bb98f7f1552e7f4c9d31fedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_25442cb38dc1c5d752369cc8da6d12e9b1a48f33bb98f7f1552e7f4c9d31fedd->leave($__internal_25442cb38dc1c5d752369cc8da6d12e9b1a48f33bb98f7f1552e7f4c9d31fedd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_476cd6a2b39237d8cf3b7d73438900a39176314e5875b1b28ad6f961be37324b = $this->env->getExtension("native_profiler");
        $__internal_476cd6a2b39237d8cf3b7d73438900a39176314e5875b1b28ad6f961be37324b->enter($__internal_476cd6a2b39237d8cf3b7d73438900a39176314e5875b1b28ad6f961be37324b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_476cd6a2b39237d8cf3b7d73438900a39176314e5875b1b28ad6f961be37324b->leave($__internal_476cd6a2b39237d8cf3b7d73438900a39176314e5875b1b28ad6f961be37324b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_278f7ac4eeec28f0b2463bbf4fe0a00c467c44c798a3b1282f5cf2cb729ef971 = $this->env->getExtension("native_profiler");
        $__internal_278f7ac4eeec28f0b2463bbf4fe0a00c467c44c798a3b1282f5cf2cb729ef971->enter($__internal_278f7ac4eeec28f0b2463bbf4fe0a00c467c44c798a3b1282f5cf2cb729ef971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_278f7ac4eeec28f0b2463bbf4fe0a00c467c44c798a3b1282f5cf2cb729ef971->leave($__internal_278f7ac4eeec28f0b2463bbf4fe0a00c467c44c798a3b1282f5cf2cb729ef971_prof);

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
