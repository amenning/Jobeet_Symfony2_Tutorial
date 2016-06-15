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
        $__internal_a4a93404c8a1e13550e0f51f52f4e0b6baa6eb1948b2eed1b6362a4dfa6600d9 = $this->env->getExtension("native_profiler");
        $__internal_a4a93404c8a1e13550e0f51f52f4e0b6baa6eb1948b2eed1b6362a4dfa6600d9->enter($__internal_a4a93404c8a1e13550e0f51f52f4e0b6baa6eb1948b2eed1b6362a4dfa6600d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a93404c8a1e13550e0f51f52f4e0b6baa6eb1948b2eed1b6362a4dfa6600d9->leave($__internal_a4a93404c8a1e13550e0f51f52f4e0b6baa6eb1948b2eed1b6362a4dfa6600d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54839b41c2dc1fcf0790005a1f097072017b8839ccd611399bb607f8c4381a89 = $this->env->getExtension("native_profiler");
        $__internal_54839b41c2dc1fcf0790005a1f097072017b8839ccd611399bb607f8c4381a89->enter($__internal_54839b41c2dc1fcf0790005a1f097072017b8839ccd611399bb607f8c4381a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_54839b41c2dc1fcf0790005a1f097072017b8839ccd611399bb607f8c4381a89->leave($__internal_54839b41c2dc1fcf0790005a1f097072017b8839ccd611399bb607f8c4381a89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05a3f4167d168322c909b53656fa9f70a00c3f11460e6f4307909b2bf698e563 = $this->env->getExtension("native_profiler");
        $__internal_05a3f4167d168322c909b53656fa9f70a00c3f11460e6f4307909b2bf698e563->enter($__internal_05a3f4167d168322c909b53656fa9f70a00c3f11460e6f4307909b2bf698e563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05a3f4167d168322c909b53656fa9f70a00c3f11460e6f4307909b2bf698e563->leave($__internal_05a3f4167d168322c909b53656fa9f70a00c3f11460e6f4307909b2bf698e563_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c94c8461219e7d81445f6026908ea77e70c82a00c9a365d77a71ac14caa1be15 = $this->env->getExtension("native_profiler");
        $__internal_c94c8461219e7d81445f6026908ea77e70c82a00c9a365d77a71ac14caa1be15->enter($__internal_c94c8461219e7d81445f6026908ea77e70c82a00c9a365d77a71ac14caa1be15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c94c8461219e7d81445f6026908ea77e70c82a00c9a365d77a71ac14caa1be15->leave($__internal_c94c8461219e7d81445f6026908ea77e70c82a00c9a365d77a71ac14caa1be15_prof);

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
