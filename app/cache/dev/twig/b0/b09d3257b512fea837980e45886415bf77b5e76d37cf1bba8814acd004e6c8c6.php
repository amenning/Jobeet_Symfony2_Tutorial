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
        $__internal_4b3b8468d15967e0d028dfacad2e4d19bcbac111b4df1bfcb46d404d7180eb72 = $this->env->getExtension("native_profiler");
        $__internal_4b3b8468d15967e0d028dfacad2e4d19bcbac111b4df1bfcb46d404d7180eb72->enter($__internal_4b3b8468d15967e0d028dfacad2e4d19bcbac111b4df1bfcb46d404d7180eb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b3b8468d15967e0d028dfacad2e4d19bcbac111b4df1bfcb46d404d7180eb72->leave($__internal_4b3b8468d15967e0d028dfacad2e4d19bcbac111b4df1bfcb46d404d7180eb72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed366c85ec07f5fc0261764ea44cc25fa088212909b0afd3f0bb0464e7a5a4fc = $this->env->getExtension("native_profiler");
        $__internal_ed366c85ec07f5fc0261764ea44cc25fa088212909b0afd3f0bb0464e7a5a4fc->enter($__internal_ed366c85ec07f5fc0261764ea44cc25fa088212909b0afd3f0bb0464e7a5a4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed366c85ec07f5fc0261764ea44cc25fa088212909b0afd3f0bb0464e7a5a4fc->leave($__internal_ed366c85ec07f5fc0261764ea44cc25fa088212909b0afd3f0bb0464e7a5a4fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3daced4acf6889d2faceee2e36ffab78546064c23f3a0dd722a8cfc82d48ad7f = $this->env->getExtension("native_profiler");
        $__internal_3daced4acf6889d2faceee2e36ffab78546064c23f3a0dd722a8cfc82d48ad7f->enter($__internal_3daced4acf6889d2faceee2e36ffab78546064c23f3a0dd722a8cfc82d48ad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3daced4acf6889d2faceee2e36ffab78546064c23f3a0dd722a8cfc82d48ad7f->leave($__internal_3daced4acf6889d2faceee2e36ffab78546064c23f3a0dd722a8cfc82d48ad7f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e869c8899682d880dc34c30a91126567a92c5be392e59945ccdebc8cc47c2579 = $this->env->getExtension("native_profiler");
        $__internal_e869c8899682d880dc34c30a91126567a92c5be392e59945ccdebc8cc47c2579->enter($__internal_e869c8899682d880dc34c30a91126567a92c5be392e59945ccdebc8cc47c2579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e869c8899682d880dc34c30a91126567a92c5be392e59945ccdebc8cc47c2579->leave($__internal_e869c8899682d880dc34c30a91126567a92c5be392e59945ccdebc8cc47c2579_prof);

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
