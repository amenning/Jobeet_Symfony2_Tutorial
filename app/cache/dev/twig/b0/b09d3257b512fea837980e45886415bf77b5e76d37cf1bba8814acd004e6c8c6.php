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
        $__internal_5de5a19b92773cbae138823c62a84bc9e1805b18f7b46aa81416fc0f16698646 = $this->env->getExtension("native_profiler");
        $__internal_5de5a19b92773cbae138823c62a84bc9e1805b18f7b46aa81416fc0f16698646->enter($__internal_5de5a19b92773cbae138823c62a84bc9e1805b18f7b46aa81416fc0f16698646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de5a19b92773cbae138823c62a84bc9e1805b18f7b46aa81416fc0f16698646->leave($__internal_5de5a19b92773cbae138823c62a84bc9e1805b18f7b46aa81416fc0f16698646_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd4e5380a66604208834e0e9022d282d50ddd1593234e99067dca366cf0fc3af = $this->env->getExtension("native_profiler");
        $__internal_fd4e5380a66604208834e0e9022d282d50ddd1593234e99067dca366cf0fc3af->enter($__internal_fd4e5380a66604208834e0e9022d282d50ddd1593234e99067dca366cf0fc3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd4e5380a66604208834e0e9022d282d50ddd1593234e99067dca366cf0fc3af->leave($__internal_fd4e5380a66604208834e0e9022d282d50ddd1593234e99067dca366cf0fc3af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f67e86e202270226ae0eac4dbf4ef8a8d73553f9985ad3431ccf47796babfa25 = $this->env->getExtension("native_profiler");
        $__internal_f67e86e202270226ae0eac4dbf4ef8a8d73553f9985ad3431ccf47796babfa25->enter($__internal_f67e86e202270226ae0eac4dbf4ef8a8d73553f9985ad3431ccf47796babfa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f67e86e202270226ae0eac4dbf4ef8a8d73553f9985ad3431ccf47796babfa25->leave($__internal_f67e86e202270226ae0eac4dbf4ef8a8d73553f9985ad3431ccf47796babfa25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_026f0f21e74b8e2114b0021a3387e31779ef70b0fa70099ace53b9f94c61f7b0 = $this->env->getExtension("native_profiler");
        $__internal_026f0f21e74b8e2114b0021a3387e31779ef70b0fa70099ace53b9f94c61f7b0->enter($__internal_026f0f21e74b8e2114b0021a3387e31779ef70b0fa70099ace53b9f94c61f7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_026f0f21e74b8e2114b0021a3387e31779ef70b0fa70099ace53b9f94c61f7b0->leave($__internal_026f0f21e74b8e2114b0021a3387e31779ef70b0fa70099ace53b9f94c61f7b0_prof);

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
