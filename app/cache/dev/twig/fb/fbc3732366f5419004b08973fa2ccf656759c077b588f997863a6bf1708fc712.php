<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc23f18f32465427fb0e1136e0172e5d7a95bb25e2967c7847d38f9dab0dc028 extends Twig_Template
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
        $__internal_fab999d8db10c3e699e93bdb750f80185c8ef6429b92c779812523e21ccc0046 = $this->env->getExtension("native_profiler");
        $__internal_fab999d8db10c3e699e93bdb750f80185c8ef6429b92c779812523e21ccc0046->enter($__internal_fab999d8db10c3e699e93bdb750f80185c8ef6429b92c779812523e21ccc0046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab999d8db10c3e699e93bdb750f80185c8ef6429b92c779812523e21ccc0046->leave($__internal_fab999d8db10c3e699e93bdb750f80185c8ef6429b92c779812523e21ccc0046_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e996c1f5691ab6e4fe5877d5b9d06843bbafc879a3efbca4861c9c0313acd2c = $this->env->getExtension("native_profiler");
        $__internal_0e996c1f5691ab6e4fe5877d5b9d06843bbafc879a3efbca4861c9c0313acd2c->enter($__internal_0e996c1f5691ab6e4fe5877d5b9d06843bbafc879a3efbca4861c9c0313acd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e996c1f5691ab6e4fe5877d5b9d06843bbafc879a3efbca4861c9c0313acd2c->leave($__internal_0e996c1f5691ab6e4fe5877d5b9d06843bbafc879a3efbca4861c9c0313acd2c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7da2cd6b0a9692cfaa13eca93301244a167d38aa039407c9cbf871ee94ee9e3 = $this->env->getExtension("native_profiler");
        $__internal_c7da2cd6b0a9692cfaa13eca93301244a167d38aa039407c9cbf871ee94ee9e3->enter($__internal_c7da2cd6b0a9692cfaa13eca93301244a167d38aa039407c9cbf871ee94ee9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7da2cd6b0a9692cfaa13eca93301244a167d38aa039407c9cbf871ee94ee9e3->leave($__internal_c7da2cd6b0a9692cfaa13eca93301244a167d38aa039407c9cbf871ee94ee9e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d81f06aa747d627896a58a8506629056fb767534a97e4e8a2950c2186951c6f = $this->env->getExtension("native_profiler");
        $__internal_8d81f06aa747d627896a58a8506629056fb767534a97e4e8a2950c2186951c6f->enter($__internal_8d81f06aa747d627896a58a8506629056fb767534a97e4e8a2950c2186951c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d81f06aa747d627896a58a8506629056fb767534a97e4e8a2950c2186951c6f->leave($__internal_8d81f06aa747d627896a58a8506629056fb767534a97e4e8a2950c2186951c6f_prof);

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
