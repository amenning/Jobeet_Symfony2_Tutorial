<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f732ade2649809760573f5532d49062052050ff62798e62cf83a8985a532e701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_66d5aadf64a38075ca81d3f0dc896222a1f8ada0e289bfa50538c6ec61a8dce9 = $this->env->getExtension("native_profiler");
        $__internal_66d5aadf64a38075ca81d3f0dc896222a1f8ada0e289bfa50538c6ec61a8dce9->enter($__internal_66d5aadf64a38075ca81d3f0dc896222a1f8ada0e289bfa50538c6ec61a8dce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66d5aadf64a38075ca81d3f0dc896222a1f8ada0e289bfa50538c6ec61a8dce9->leave($__internal_66d5aadf64a38075ca81d3f0dc896222a1f8ada0e289bfa50538c6ec61a8dce9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17afdfa22c80b437e68cef75ed6a9f90255e8a45aaa2bf19f031bcf87b9f4708 = $this->env->getExtension("native_profiler");
        $__internal_17afdfa22c80b437e68cef75ed6a9f90255e8a45aaa2bf19f031bcf87b9f4708->enter($__internal_17afdfa22c80b437e68cef75ed6a9f90255e8a45aaa2bf19f031bcf87b9f4708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17afdfa22c80b437e68cef75ed6a9f90255e8a45aaa2bf19f031bcf87b9f4708->leave($__internal_17afdfa22c80b437e68cef75ed6a9f90255e8a45aaa2bf19f031bcf87b9f4708_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4dfd1849541cf850043093427e270fda93e0aa1d9857a67e0dc52faa04723d10 = $this->env->getExtension("native_profiler");
        $__internal_4dfd1849541cf850043093427e270fda93e0aa1d9857a67e0dc52faa04723d10->enter($__internal_4dfd1849541cf850043093427e270fda93e0aa1d9857a67e0dc52faa04723d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4dfd1849541cf850043093427e270fda93e0aa1d9857a67e0dc52faa04723d10->leave($__internal_4dfd1849541cf850043093427e270fda93e0aa1d9857a67e0dc52faa04723d10_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bdb13d28464dfd0fb35aad8d97af497dfbf71ef49391dbe04d6180f75a47a4d = $this->env->getExtension("native_profiler");
        $__internal_9bdb13d28464dfd0fb35aad8d97af497dfbf71ef49391dbe04d6180f75a47a4d->enter($__internal_9bdb13d28464dfd0fb35aad8d97af497dfbf71ef49391dbe04d6180f75a47a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9bdb13d28464dfd0fb35aad8d97af497dfbf71ef49391dbe04d6180f75a47a4d->leave($__internal_9bdb13d28464dfd0fb35aad8d97af497dfbf71ef49391dbe04d6180f75a47a4d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
