<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f484198884ebabdef6091d5aefc1a1a4a740787291656e8ff245f457d037a9c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f846eb8a8c75baa31ba50711913a99f1c2816839a070f4965e55aeca9e30e6a = $this->env->getExtension("native_profiler");
        $__internal_9f846eb8a8c75baa31ba50711913a99f1c2816839a070f4965e55aeca9e30e6a->enter($__internal_9f846eb8a8c75baa31ba50711913a99f1c2816839a070f4965e55aeca9e30e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9f846eb8a8c75baa31ba50711913a99f1c2816839a070f4965e55aeca9e30e6a->leave($__internal_9f846eb8a8c75baa31ba50711913a99f1c2816839a070f4965e55aeca9e30e6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
