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
        $__internal_2d76104ca400d03198ffb79d1fb91b65b99a7f85cfe6c99ca2029058d33dfbb8 = $this->env->getExtension("native_profiler");
        $__internal_2d76104ca400d03198ffb79d1fb91b65b99a7f85cfe6c99ca2029058d33dfbb8->enter($__internal_2d76104ca400d03198ffb79d1fb91b65b99a7f85cfe6c99ca2029058d33dfbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d76104ca400d03198ffb79d1fb91b65b99a7f85cfe6c99ca2029058d33dfbb8->leave($__internal_2d76104ca400d03198ffb79d1fb91b65b99a7f85cfe6c99ca2029058d33dfbb8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b425e5f97984f62eaf1231773c339457b6b31fc82820cac99fa06129d8f427a6 = $this->env->getExtension("native_profiler");
        $__internal_b425e5f97984f62eaf1231773c339457b6b31fc82820cac99fa06129d8f427a6->enter($__internal_b425e5f97984f62eaf1231773c339457b6b31fc82820cac99fa06129d8f427a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b425e5f97984f62eaf1231773c339457b6b31fc82820cac99fa06129d8f427a6->leave($__internal_b425e5f97984f62eaf1231773c339457b6b31fc82820cac99fa06129d8f427a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aee45c3e3bdb6a219fe89161fe55835818232f46fb918d8a51244e98a4f0193f = $this->env->getExtension("native_profiler");
        $__internal_aee45c3e3bdb6a219fe89161fe55835818232f46fb918d8a51244e98a4f0193f->enter($__internal_aee45c3e3bdb6a219fe89161fe55835818232f46fb918d8a51244e98a4f0193f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aee45c3e3bdb6a219fe89161fe55835818232f46fb918d8a51244e98a4f0193f->leave($__internal_aee45c3e3bdb6a219fe89161fe55835818232f46fb918d8a51244e98a4f0193f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e220871e25b08731566f39e435a05c74715df9114267767baa593f613db259d1 = $this->env->getExtension("native_profiler");
        $__internal_e220871e25b08731566f39e435a05c74715df9114267767baa593f613db259d1->enter($__internal_e220871e25b08731566f39e435a05c74715df9114267767baa593f613db259d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e220871e25b08731566f39e435a05c74715df9114267767baa593f613db259d1->leave($__internal_e220871e25b08731566f39e435a05c74715df9114267767baa593f613db259d1_prof);

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
